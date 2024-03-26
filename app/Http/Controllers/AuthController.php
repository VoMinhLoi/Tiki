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

    public function login(AuthRequest $request)
    {
        // $remember = $request->has('remember');
        if (Auth::attempt($request->validated())) {
            // if (Auth::attempt(['email' => $request->email, 'password' => $request->password],$remember)) {
            if (Auth::user()->role != 'admin') {
                $request->session()->regenerate();
                return redirect()->back()->with([
                    'mess' => 'thanh cong'
                ]);
            }
        } else
            // back()->withInput($request->only('email', 'password', 'remember'))->withErrors(['password' => 'Thông tin đăng nhập không đúng']);
            return response()->json(['mess' => "Login Fail"]);
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
            // dd($user->id);
            $finduser = User::where('google_id', $user->id)->first();
            // $finduser = User::where('google_id', $user->google_id)->first();

            if ($finduser) {
                Auth::login($finduser);
                // dd(1);
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => encrypt('123456789')
                ]);
                Auth::login($newUser);
                // dd(0);
            }

            return redirect()->route('home');
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
