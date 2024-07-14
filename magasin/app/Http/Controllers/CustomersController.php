<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomersModel;

class CustomersController extends Controller
{
    public function  customers(Request $request)
    {
        //echo "hello imed eddine benzarti"; die();
        $data['getRecord'] = CustomersModel::getAllRecord();
        return view('admin.customers.list', $data);
    }


    public function  add(Request $request)
    {
        //echo "hello imed eddine benzarti"; die();
        return view('admin.customers.add_customers');
    }


    public function  insert_add_customers(Request $request)
    {
        //echo "hello imed eddine benzarti"; die();
        //dd($request->all());

        $save = new CustomersModel;
        $save -> name =trim($request->name);
        $save -> contact_number =trim($request->contact_number);
        $save -> address =trim($request->address);
        $save -> email =trim($request->email);
        $save->save();

        return redirect('admin/customers')->with('success', 'Customers Added');
    
    }

    public function  edit($id, Request $request)
    {
        $data['getRecord'] = CustomersModel::getSingle($id);
        return view('admin.customers.edit_customers', $data);
    }

    public function update_customers($id, Request $request)
    {
        $save = CustomersModel::getSingle($id);
        $save -> name =trim($request->name);
        $save -> contact_number =trim($request->contact_number);
        $save -> address =trim($request->address);
        $save -> email =trim($request->email);
        $save->save();

        return redirect('admin/customers')->with('success', 'Customers updated');        
    }

    public function delete_customers($id){
        //echo $id;

        $delete_record=CustomersModel::getSingle($id);
        $delete_record->delete();

        return redirect('admin/customers')->with('success', 'Customers deleted');

    }

    
}
