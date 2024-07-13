<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
