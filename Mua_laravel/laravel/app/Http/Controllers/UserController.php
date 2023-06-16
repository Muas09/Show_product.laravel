<?php

namespace App\Http\UserController;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    public function Hello(){
        echo"Xin Chào";
    }
    use AuthorizesRequests, ValidatesRequests;
}
