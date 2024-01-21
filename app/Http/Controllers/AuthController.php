<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login(AuthRequest $request){
        if (Auth::attempt($request->validated())) {
            $request->session()->regenerate();
            return redirect()->route('home');
        }
        return redirect()->back()->with([
            'fail' => 'Sai password hoac email'
        ]);
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
            return redirect()->route('home');
        }
        return redirect()->back()->with(['message'=>'Dang ky that bai']);
    }
}
