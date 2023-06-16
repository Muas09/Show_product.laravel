<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaofShapeController extends Controller
{
    //
    function computeArea(Request $request)
    {
        $a= $request->input('a');
        $b= $request->input('b');
        $e1= $request->input('e1');
        $e2= $request->input('e2');
        $e3= $request->input('e3');
        $e4= $request->input('e4');
        return view('areaOfShape')->with(['areaTriangle'=>($a+$b)/2,'areaQuadrangle'=>($e1+$e2+$e3+$e4)]);
    }
}
