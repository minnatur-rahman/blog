<?php

use App\Http\Controllers\WebPageController;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;


// Route::get('/', function(){
//     return view('welcome');
// });

Route::get('/', [testController::class, 'showHome'])->name('home');
Route::get('/user', [testController::class, 'showUser'])->name('users');




