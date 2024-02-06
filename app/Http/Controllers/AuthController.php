<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{

    public function login(AuthRequest $request){
        $remember = $request->has('remember');
        // if (Auth::attempt($request->validated(),$remember)) {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password],$remember)) {
            $request->session()->regenerate();
            //Dùng cookie lưu mật khẩu
            $email = $request->input('email');
            $password = $request->input('password');
            $remember = $request->input('remember');
            Cookie::queue('remember_email', $email, 60 * 24 * 30); // Thời gian sống: 30 ngày
            Cookie::queue('remember_password', $password, 60 * 24 * 30);
            Cookie::queue('remember_remember', $remember, 60 * 24 * 30);
            // Intend chuyển trang đang đứng.
            echo '<script>';
            echo 'alert("Đăng nhập thành công.");';
            echo '</script>';
            redirect()->intended('/dashboard');
            // return redirect()->route('cart');
        }
        echo '<script>';
        echo 'alert("Đăng nhập thất bại.");';
        echo '</script>';
        back()->withInput($request->only('email', 'password', 'remember'))->withErrors(['password' => 'Thông tin đăng nhập không đúng']);
        return redirect()->back()->with([
            'fail' => 'Sai password hoac email'
        ]);
    }

    public function formLogin(Request $request){
        if($request->route()->getName()=='formLogin'){}
        return view('login');
    }

    public function formRegister(){
        return view('register');
    }

    public function register(RegisterRequest $request){
        $data = $request->validated();
        $data['password'] = bcrypt($data['password']);
        $dataShow = User::create($data);
        if($dataShow){
            // return view('welcome');
            return redirect()->intended('/dashboard');
        }
        return redirect()->back()->with(['message'=>'Dang ky that bai']);
    }

    public function logout(){
        Auth::logout();
        session()->flashInput([]);
        return redirect()->route('home');
    }
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
      
            $user = Socialite::driver('google')->user();
       
            $finduser = User::where('google_id', $user->google_id)->first();
            // $finduser = User::where('google_id', $user->google_id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('dashboard');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => encrypt('123456789')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('dashboard');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}