<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registercontroller extends Controller
{
    public function form(){
        return  view('register');
    }
    public function welcome(Request $request){
        $depan=$request["firstname"];
        $belakang=$request["lastname"];
        return  view('welcome1',["depan"=>$depan],["belakang"=>$belakang]);
    }
}