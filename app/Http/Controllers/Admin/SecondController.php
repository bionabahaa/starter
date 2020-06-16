<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SecondController extends Controller
{
     public function __construct()
     {
         $this->middleware('auth')->except('showsecond2');
     }

    public function  showsecond1()
    {
        return "showsecond 1";
    }


    public function  showsecond2()
    {
        return "showsecond 2";
    }



    public function  showsecond3()
    {
        return "showsecond 3";
    }


    public function  showsecond4()
    {
        return "showsecond 4";
    }
}
