<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function profile(){
        return view('User.profile');
    }

    public function updateProfile(User $user, UserRequest $request){
        $user->update($request->validated());
        return redirect()->route('profile');
    }
}
