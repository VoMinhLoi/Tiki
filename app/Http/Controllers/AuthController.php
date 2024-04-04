<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Mail\ForgotPasswordEmail;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{

    public function login(AuthRequest $request)
    {
        // $remember = $request->has('remember');
        if (Auth::attempt($request->validated())) {
            // if (Auth::attempt(['email' => $request->email, 'password' => $request->password],$remember)) {
            if (Auth::user()->role == 'user') {
                $request->session()->regenerate();
                session()->flash('json_message', 'Đăng nhập thành công');
                return redirect()->back();
            }
        } else
            // back()->withInput($request->only('email', 'password', 'remember'))->withErrors(['password' => 'Thông tin đăng nhập không đúng']);
            // return response()->json([
            //     'message' => 'Không thể đăng nhập!!!',
            // ], Response::HTTP_NOT_FOUND);
            return redirect()->back()->withErrors(['message' => 'Thông tin đăng nhập không đúng']);
    }

    public function loginAdmin(AuthRequest $request)
    {
        if (Auth::attempt($request->validated())) {
            if (Auth::user()->role == 'admin') {
                $request->session()->regenerate();
                return view('Admin.brand');
            }
        }
        return redirect()->back()->with([
            'fail' => 'Sai password hoac email'
        ]);
    }

    public function formLogin(Request $request)
    {
        return view('login');
    }

    public function formForgotPassword()
    {
        return view('forgot');
    }

    public function forgotPassword(AuthRequest $request)
    {
        $user = User::where('email', $request->validated()['email'])->first();
        if ($user) {
            //tạo token có độ dài 64 ký tự 
            $token = Str::random(64);

            //thêm dữ liệu vào bảng password_reset_tokens
            DB::table('reset_passwords')->insert([
                'email' => $request->email, //lưu địa chỉ mail từ request
                'token' => $token, //lưu token đc tạo ra ở trên
                'created_at' => Carbon::now() //lưu thời điểm tạo token
            ]);
            //gửi email thông báo đặt lại mk 
            //fe.email-forgot-password và token sẽ được chuyển đến view
            //trong URL đc gửi đến email, có token được truyền qua URL
            //sau đó sẽ so sánh token trong url có trùng khớp với token trong database ko
            //có thì sẽ cho phép đổi mật khẩu
            // buttonreset là tên giao diện
            // Token và email được gửi đi
            Mail::send('buttonreset', ['token' => $token], function ($message) use ($request) {
                $message->to($request->email);
                $message->subject("Reset Password");
            });
            session()->flash('json_message', 'Gửi email thành công và có hiệu lực trong 10 phút.');
            return redirect()->back();
        } else
            return redirect()->back()->withErrors(['message' => 'Email không tồn tại']);
    }

    public function formResetPassword($token)
    {
        return view('reset', compact('token'));
    }

    public function resetPassword(Request $request)
    {
        //Kiểm tra xem email và token có tồn tại trong bảng reset_passwords hay không
        $updatePassword = DB::table('reset_passwords')
            ->where([
                'token' => $request->token,
            ])->first();

        //ko tồn tại thì hiển thị lỗi
        if (!$updatePassword) {
            return redirect()->to(route("reset.password"))->withErrors("error", "Invalid");
        }
        // dd();
        // cập nhật mật khẩu mới trong bảng users
        User::where("email", $updatePassword->email)
            ->update(["password" => bcrypt($request->password)]);

        //xóa token khỏi bảng reset_passwords
        DB::table("reset_passwords")->where(["token" => $request->token])->delete();
        //chuyển hướng đến trang login
        return redirect()->to(route("formLogin"))->with("success", "mat khau da reset");
    }

    public function formRegister()
    {
        return view('register');
    }

    public function register(RegisterRequest $request)
    {
        $data = $request->validated();
        $data['password'] = bcrypt($data['password']);
        $dataShow = User::create($data);
        if ($dataShow) {
            // return view('welcome');
            return redirect()->intended('/dashboard');
        }
        return redirect()->back()->with(['message' => 'Dang ky that bai']);
    }

    public function logout()
    {
        Auth::logout();
        session()->flashInput([]);
        return redirect()->route('home');
    }
    public function logoutAdmin()
    {
        Auth::logout();
        session()->flashInput([]);
        return redirect()->route('formLogin');
    }
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {

            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $user->id)->first();

            if ($finduser) {
                Auth::login($finduser);
            } else {
                $oldUserHasEmailLikeGmail = User::where('email', $user->email)->first();
                if ($oldUserHasEmailLikeGmail) {
                    $oldUserHasEmailLikeGmail->update(['google_id' => $user->id]);
                    Auth::login($oldUserHasEmailLikeGmail);
                } else {
                    $newUser = User::create([
                        'name' => $user->name,
                        'email' => $user->email,
                        'google_id' => $user->id,
                        'password' => encrypt('123456789')
                    ]);
                    Auth::login($newUser);
                }
            }

            return redirect()->route('home');
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
