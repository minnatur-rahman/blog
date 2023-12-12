<?php

use App\Http\Controllers\WebPageController;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Support\Facades\Route;



Route::get('/', function(){
   return view('welcome');
});

Route::get('/pon', function(){
    $name = 'Minnatur Rahmen';
    // return view('users', [
    //     'user' => $name,
    //     'city' => 'Dhaka'
    // ]);

//    return view('users')
//    ->with('user', $name)
//    ->with('city', 'Dhaka');

     return view('users')
     ->withUser($name)
     ->withCity('Dhaka');


 });







