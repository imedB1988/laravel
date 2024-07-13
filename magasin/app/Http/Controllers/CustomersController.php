<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function  customers(Request $request)
    {
        //echo "hello imed eddine benzarti"; die();
        return view('admin.customers.list');
    }


    public function  add(Request $request)
    {
        //echo "hello imed eddine benzarti"; die();
        return view('admin.customers.add_customers');
    }
}
