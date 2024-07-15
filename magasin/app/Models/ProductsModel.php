<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    use HasFactory;

    protected $table= 'products';


    static public function getAllRecord(){
        return self::get();
    }

    static public function getSingle($id){
        return self::find($id);
    }
}
