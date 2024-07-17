<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsModel;
use App\Models\ProductStockModel;

class ProductStockController extends Controller
{
    public function  productstock(Request $request)
    {
        //echo "hello imed eddine benzarti"; die();
        $data['getRecord'] = ProductStockModel  ::get();
        return view('admin.productstock.list',$data);
    }

    public function  add(Request $request)
    {
        //echo "hello imed eddine benzarti"; die();
        $data['getRecord'] = ProductsModel::getAllRecord();
        return view('admin.productstock.add', $data);
    }

    public function  insert_add_productstock(Request $request)
    {
        //echo "hello imed eddine benzarti"; die();
        //dd($request->all());

        $save = new ProductStockModel;
        $save ->productid =trim($request->productid);
        $save ->batchid =trim($request->batchid);
        $save ->expiry_date =trim($request->expiry_date);
        $save ->quantity =trim($request->quantity);
        $save->save();

        return redirect('admin/productstock')->with('success', 'product stock Added');
    
    }

    public function delete_productstock($id, Request $request){
        $deleterecord=ProductStockModel::find($id);
        $deleterecord->delete();
        return redirect('admin/productstock')->with('success', 'product stock deleted');

    }

    public function edit_productstock($id, Request $request){
        $data['oldRecord']=ProductStockModel::find($id);
        $data['getRecord'] = ProductsModel::getAllRecord();
        return view('admin.productstock.edit', $data);
        }

    public function update_productstock($id, Request $request){
        $save = ProductStockModel::find($id);
        $save ->productid =trim($request->productid);
        $save ->batchid =trim($request->batchid);
        $save ->expiry_date =trim($request->expiry_date);
        $save ->quantity =trim($request->quantity);
        $save->save();

        return redirect('admin/productstock')->with('success', 'product stock updated');
    
    }


}
