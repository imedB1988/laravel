<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Auth;
use App\Models\User;
class AuthController extends Controller
{
    public function login(Request $request)
    {
        //echo "hello imed eddine benzarti"; die();

            //$password = Hash::make('123456');
            //dd($password);
        return view('auth.login');
    }

    public function login_post(Request $request)
    {
        //echo "hello imed eddine benzarti"; die();
       if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password], true)){
                if(Auth::User()->is_role=='1'){
                        return redirect()->intended('admin/dashboard');
                }else{
                    return redirect()->back()->with('error', 'please check credentials !');
                }

        }
        else
        {
            return redirect()->back()->with('error', 'please check credentials !');
        }

        //dd($request->all());
    }

    public function forgot()
    {
        //echo "hello imed eddine benzarti"; die();
        return view('auth.forgot');
    }


    public function logout()
    {
        //echo "hello imed eddine benzarti"; die();
        Auth::logout();
        return redirect(url('/'));
    }
}
