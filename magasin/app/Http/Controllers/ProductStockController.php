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
        //$data['getRecord'] = productstock::getAllRecord();
        return view('admin.productstock.list');
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

}
