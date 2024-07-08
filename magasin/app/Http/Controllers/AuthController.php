<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        //echo "hello imed eddine benzarti"; die();


        return view('auth.login');
    }

    public function login_post(Request $request)
    {
        //echo "hello imed eddine benzarti"; die();
        if(Auth::attempt(['email'=>$request->$email, 'password'=>$password], true)){}

    }

    public function forgot(Request $request)
    {
        //echo "hello imed eddine benzarti"; die();
        return view('auth.forgot');
    }
}
