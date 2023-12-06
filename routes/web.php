<?php

use App\Http\Controllers\WebPageController;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Support\Facades\Route;



Route::get('/', function(){
   return view('index');
});

Route::get('/about', function(){
    return view('about');
 });

 Route::get('/post', function(){
    return view('post');
 });
