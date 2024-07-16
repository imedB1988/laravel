<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductStockModel extends Model
{
    use HasFactory;

    protected $table= 'productstock';


    static public function getAllRecord(){
        return self::get();
    }

    static public function getSingle($id){
        return self::find($id);
    }
}
