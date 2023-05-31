<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_product extends Model
{
    use HasFactory;
    protected $table ="type_products"; //tên model

    public function products(){ // tên bảng
        return $this->hasMany('App\Product'); //model
    }
}
