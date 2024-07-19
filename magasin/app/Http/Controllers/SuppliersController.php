<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuppliersModel;
class SuppliersController extends Controller
{
    public function suppliers()
    {
        $data['getRecord'] = SuppliersModel::get();
        return view('admin.suppliers.list', $data);
    }

    public function add()
    {
       
        $data['getRecord'] = SuppliersModel::getAllRecord();
        return view('admin.suppliers.add', $data);
    }

    public function  insert_add_suppliers(Request $request)
    {
        //echo "hello imed eddine benzarti"; die();
        //dd($request->all());

        $save = new SuppliersModel;
        $save ->supplier_name =trim($request->supplier_name);
        $save ->supplier_email =trim($request->supplier_email);
        $save ->contact_number =trim($request->contact_number);
        $save ->address =trim($request->address);
        $save->save();

        return redirect('admin/suppliers')->with('success', 'Supplier Added');
    
    }

    public function delete_suppliers($id, Request $request){
        $deleterecord=SuppliersModel::find($id);
        $deleterecord->delete();
        return redirect('admin/suppliers')->with('success', 'supplier deleted');

    }

    
    public function  edit($id, Request $request)
    {
        $data['getRecord'] = SuppliersModel::getSingle($id);
        return view('admin.suppliers.edit_suppliers', $data);
    }

    public function update_suppliers($id, Request $request)
    {
        $save = SuppliersModel::getSingle($id);
        $save -> supplier_name =trim($request->supplier_name);
        $save -> supplier_email =trim($request->supplier_email);
        $save -> contact_number =trim($request->contact_number);
        $save -> address =trim($request->address);
        
        $save->save();

        return redirect('admin/suppliers')->with('success', 'supplier updated');        
    }

}
