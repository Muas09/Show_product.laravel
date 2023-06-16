<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class XinchaoController extends Controller
{
    //
    // public function Hello(){
    //     echo"Xin Chào";
    // }
    public function Hello(){
        // $title ="Đây là tiêu đề";
        // $description ="Đây là dòng mô tả";
        // $arr=['title'=>$title,'discription'=>$description];
        // return view('test')->with('b',$arr);
        // return view('test')->with(['title'=>$title,'description'=>$description]);

       
    }

    public function tinhtong(Request $request)
    {
        $sum = $request ->soA +  $request ->soB;
        return view('sum',compact('sum'));
    }

    
}