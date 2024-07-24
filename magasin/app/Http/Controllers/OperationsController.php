<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductStockModel;
use App\Models\InvoicesModel;

use Illuminate\Support\Facades\DB;

class OperationsController extends Controller
{
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

