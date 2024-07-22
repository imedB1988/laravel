<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;
use Str;
use File;

class DashboardController extends Controller
{

    public function  dashboard(Request $request)
    {
        //echo "hello imed eddine benzarti"; die();
        return view('admin.dashboard.list');
    }

    public function  customers(Request $request)
    {
        //echo "hello imed eddine benzarti"; die();
        return view('admin.customers.list');
    }

    public function  my_account(Request $request)
    {
        //echo "hello imed eddine benzarti"; die();
        $data['getRecord'] = User::find(Auth::user()->id);
        return view('admin.myaccount.update', $data);

    }

    public function  my_account_update(Request $request)
    {
        //echo "hello imed eddine benzarti"; die();
       $save= request()->validate(['email'=>'required|unique:users,email,'.Auth::user()->id]);
       $save= User::find(Auth::user()->id);
       $save->name=trim($request->name);
       $save->email=trim($request->email);
       if(!empty($request->password)){
       $save->password=Hash::make($request->password);
       }
   
       $save->save();
       return redirect('admin/dashboard')->with('success', 'Profile Updated');

        
    }

    
}
