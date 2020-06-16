<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function  ShowUser()
    {
        return "show user" ;
    }

    public function getindex()
    {
//        $data=[];
//        $data['name'] = "bian";
//        $data['age'] = 27;
//
//
//        return view('welcome',$data);


        $obj = new \stdClass();
        $obj-> name ="ahmed";
        $obj->id =5;
        return view('welcome',compact('obj'));

    }
}
