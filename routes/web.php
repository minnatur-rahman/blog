<?php

use App\Http\Controllers\WebPageController;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;


// Route::get('/', function(){
//     return view('welcome');
// });

// Route::controller(testController::class)->group(function(){

//     Route::get('/', 'showHome')->name('home');
//     Route::get('/blog', 'showBlog')->name('blog');
//     Route::get('/user/{id}', 'showUser')->name('users');

// });


Route::get('/test', testController::class);


