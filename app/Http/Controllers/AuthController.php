<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login(AuthRequest $request){
        $remember = $request->has('remember');
        // if (Auth::attempt($request->validated(),$remember)) {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password],$remember)) {
            $request->session()->regenerate();
            // return redirect()->route('cart');
            // Intend chuyển trang đang đứng.
            redirect()->intended('/dashboard');
        }
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
            return redirect()->route('formLogin');
        }
        return redirect()->back()->with(['message'=>'Dang ky that bai']);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
