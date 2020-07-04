<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Authcontroller extends Controller
{
    public function register(){
        return  view('register');
    }
    public function welcome(Request $request){
        $depan=$request["firstname"];
        $belakang=$request["lastname"];
        return  view('welcome1',["depan"=>$depan],["belakang"=>$belakang]);
    }
}
