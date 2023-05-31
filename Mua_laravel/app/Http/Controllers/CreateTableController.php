<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class CreateTableController extends Controller
{
    public function table(){
        if (!Schema:: hasTable('Productsl')){
            Schema :: create('Productsl',function($table){
                $table->increments('id');
                $table->string('name');
                $table->string('image');
                $table->string('description');
                $table->integer('quantity');
                $table->date('date');
                $table->timestamps();
            });
        }
        if (!Schema:: hasTable('table_name')){
            Schema :: create('Productsl',function($table){
                $table->increments('id');
                $table->string('name');
                $table->string('image');
                $table->string('description');
                $table->integer('quantity');
                $table->date('date');
               
            });
        }
        echo 'Đã tạo bảng';
        
    }
}
