<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $req){
        
        $credentials = [
            'email'=> $req -> email,
            'password'=> $req -> password,
        ];

        if(Auth::attempt($credentials)){
            return redirect() -> route('dashboard');    
        }

    }
}
