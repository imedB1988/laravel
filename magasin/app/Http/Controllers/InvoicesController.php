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

       

        public function subtractValues()
        {
           /* $tableAValue = ProductStockModel::where('productid', 5)->value('quantity'); // replace 1 with the actual id or condition
            $tableBValue = InvoicesModel::where('productid', 5)->value('quantity'); // replace 1 with the actual id or condition
    
            $result = $tableAValue - $tableBValue;
    
            return response()->json(['result' => $result]);*/
    
    
       
               // Query Builder approach
               /*$tableAValue = DB::table('productstock')->where('productid', 5)->value('quantity');
               $tableBValue = DB::table('invoices')->where('productid', 5)->value('quantity');
       
               if ($tableAValue !== null && $tableBValue !== null) {
                   $resultQueryBuilder = $tableAValue - $tableBValue;
                   DB::table('productstock')
                   ->where('productid', 5) // Assuming 'id' is the common identifier
                   ->update(['quantity' => $resultQueryBuilder]);
               } else {
                   $resultQueryBuilder = 'One of the records not found.';
               }
       
               return response()->json([
                   'query_builder_result' => $resultQueryBuilder,
               ]);*/
               DB::table('productstock')
               ->join('invoices', 'productstock.productid', '=', 'productstock.productid') // Join the tables
               ->update([
                   'productstock.quantity' => DB::raw('productstock.quantity - invoices.quantity') // Subtract stock_quantity from orders.quantity
               ]);

              
           }
    
    
   

}
