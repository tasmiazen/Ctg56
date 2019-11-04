<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function show(){
        return view('user.register');
    }
    public function register(){
        $this->validate(request(),[
            'name'=>'required|alpha_dash|unique:user,name',
            'email'=>'required|email',
            'password'=>required|confirmed|min:4,
        ]);
        User::created([
            'name'=>request('name'),
            'email'=>request('email'),
            'password'=>
        ]);
    }
}
