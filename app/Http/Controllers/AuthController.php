<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function logout()
    {
        return view(homeRoute());
    }

    public function login()
    {
        return view('frontend.auth.login');
    }

    public function register()
    {
        return view('frontend.auth.register');
    }

    public function reset()
    {
        return view('frontend.auth.passwords.reset');
    }
}
