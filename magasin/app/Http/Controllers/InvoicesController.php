<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomersModel;
use App\Models\InvoicesModel;
use App\Models\ProductsModel;
use App\Models\ProductStockModel;

use Illuminate\Support\Facades\DB;

class InvoicesController extends Controller
{
    public function invoices()
    {
        $data['getRecord'] = InvoicesModel::get();
        return view('admin.invoices.list', $data);
    }

    public function  add(Request $request)
    {
        //echo "hello imed eddine benzarti"; die();
        $data['getRecord'] = CustomersModel::getAllRecord();
        $data['getRecords'] = ProductsModel::getAllRecord();
        return view('admin.invoices.add', $data);
    }

    public function  insert_add_invoices(Request $request)
    {
        //echo "hello imed eddine benzarti"; die();
        //dd($request->all());

        $save = new InvoicesModel;
        $save ->invoices_date =trim($request->invoices_date);
        $save ->customers_id =trim($request->customers_id);
        $save ->productid =trim($request->productid);
        $save ->quantity =trim($request->quantity);
        $save->save();

        return redirect('admin/invoices')->with('success', 'invoices Added');
    
    }

    public function delete_invoices($id, Request $request){
        $deleterecord=InvoicesModel::find($id);
        $deleterecord->delete();
        return redirect('admin/invoices')->with('success', 'invoice deleted');

    }

    public function edit_invoices($id, Request $request){
      
        $data['oldRecord']=InvoicesModel::find($id);
        $data['getRecord'] = CustomersModel::getAllRecord();
        $data['getRecords'] = ProductsModel::getAllRecord();
        return view('admin.invoices.edit_invoice', $data);
        }

        public function update_invoices($id, Request $request){
            $save = InvoicesModel::find($id);
            $save ->invoices_date =trim($request->invoices_date);
            $save ->customers_id =trim($request->customers_id);
            $save ->productid =trim($request->productid);
            $save ->quantity =trim($request->quantity);
            $save->save();
    
            return redirect('admin/invoices')->with('success', 'invoices updated');      
        }

       

        
    
           public function changeStock($id, Request $request){
      
            $data['oldRecord']=InvoicesModel::find($id);
            
            return view('admin.invoices.list', $data);
            }

            public function change_Stock($id, Request $request){
   
           $tableAValue = DB::table('productstock')->value('quantity');
           $tableBValue = DB::table('invoices')->value('quantity');
           DB::table('productstock')
               ->join('invoices', 'productstock.productid', '=', 'invoices.productid')
               ->where('invoices.id', $id)
               ->update(['productstock.quantity' => $tableAValue - $tableBValue]);
                 }

 
                
   
            }

