<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function profile(){
        return view('User.profile');
    }

    public function updateProfile(User $user, UserRequest $request){
        if(isset($request->validated()['oldPassword'])){
            $oldPassword = $request->validated()['oldPassword'];
            $userPassword = Auth::user()->password;
            // dd($oldPassword, $userPassword);
            if(password_verify($oldPassword, $userPassword)){
                $newPassword = $request->validated()['newPassword'];
                $rePassword = $request->validated()['password'];
                if($newPassword == $rePassword){
                    $user->update(['password' => bcrypt($rePassword)]);
                    return redirect()->route('profile');
                }
                else
                    dd('Mật khẩu không trùng');
            }
            else
                dd('Mật khẩu cũ sai!!!');
        }
        
        $user->update($request->validated());
        return redirect()->route('profile');
    }
}
