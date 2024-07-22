<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Auth;
use App\Models\User;
use Str;
use Mail;
use App\Mail\ForgotPasswordMail;
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



    public function forgot_post(Request $request)
    {
      //dd($request->all());


      $count = User::where('email','=',$request->email)->count();
      if($count > 0){
           // dd('DDDDD');
        $user=User::where('email','=',$request->email)->first();
        $user->remember_token=Str::random(50);
        $user->save();

        Mail::to($user->email)->send(new ForgotPasswordMail($user));

        return redirect()->back()->with('success', 'Password has been reseted' );


      }else{
        return redirect()->back()->withInput()->with('error', 'email not found' );
      }
     
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
