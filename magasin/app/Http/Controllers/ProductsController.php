<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsModel;

class ProductsController extends Controller
{
    public function  products(Request $request)
    {
        //echo "hello imed eddine benzarti"; die();
        $data['getRecord'] = ProductsModel::getAllRecord();
        return view('admin.products.list', $data);
    }

    public function  add(Request $request)
    {
        //echo "hello imed eddine benzarti"; die();
        return view('admin.products.add_products');
    }

    public function  insert_add_products(Request $request)
    {
        //echo "hello imed eddine benzarti"; die();
        //dd($request->all());

        $save = new ProductsModel;
        $save -> productname =trim($request->productname);
        $save -> quantity =trim($request->quantity);
        $save->save();

        return redirect('admin/products')->with('success', 'products Added');
    
    }

    public function  edit($id, Request $request)
    {
        $data['getRecord'] = ProductsModel::getSingle($id);
        return view('admin.products.edit_products', $data);
    }

    public function update_products($id, Request $request)
    {
        $save = ProductsModel::getSingle($id);
        $save -> productname =trim($request->productname);
        $save -> quantity =trim($request->quantity);
        
        $save->save();

        return redirect('admin/products')->with('success', 'products updated');        
    }

    public function delete_products($id){
        //echo $id;

        $delete_record=ProductsModel::getSingle($id);
        $delete_record->delete();

        return redirect('admin/products')->with('success', 'products deleted');

    }

}