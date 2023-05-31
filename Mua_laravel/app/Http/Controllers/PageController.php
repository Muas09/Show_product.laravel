<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slide;

class PageController extends Controller
{
    
    public function getIndex(){
        $slide= slide::all();

        //return view('page.trangchu',['slide'=>$slide]);
        return view('page.trangchu',compact('slide'));
    }

    public function getLoaiSP(){
        return view('page.loai_sanpham');
    }
}
