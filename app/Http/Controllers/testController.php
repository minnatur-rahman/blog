<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function showHome(){
        return view('welcome');
    }

    public function showUser(){
        return view('user');
    }


}
