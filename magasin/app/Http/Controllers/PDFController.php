<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function generatePDF(){

        $products = ProductsModel::get();

     $data=[
        'title'=>'invoices',
        'date'=>date('m/d/Y'),
        'products'=> $products
     ]; 
        
    $pdf = Pdf::loadView('generate-product-pdf', $data);
    return $pdf->download('invoice.pdf');
    }
}
