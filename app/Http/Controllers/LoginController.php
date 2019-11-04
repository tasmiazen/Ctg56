<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show(){
        return view('user.login');
    }
    public function login(){
        $this->validate(request(),[
                'name'=>
        ]
            )
    }
}
