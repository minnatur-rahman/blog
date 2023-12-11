<?php

use App\Http\Controllers\WebPageController;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Support\Facades\Route;



Route::get('/', function(){
   return view('welcome');
});

Route::get('/users', function(){
    return view('users', ['user' => "Minnatur Rahman"]);
 });







