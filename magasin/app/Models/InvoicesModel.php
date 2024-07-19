<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoicesModel extends Model
{
    use HasFactory;

    protected $table= 'invoices';

    static public function getAllRecord(){
        return self::get();
    }

    static public function getSingle($id){
        return self::find($id);
    }

    public function getCustomersNames(){
        return $this->belongsTo(CustomersModel::class, 'customers_id');
    }

    public function getProductNames(){
        return $this->belongsTo(ProductsModel::class, 'productid');
    }
}
