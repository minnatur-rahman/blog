<?php

use App\Http\Controllers\WebPageController;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Support\Facades\Route;



Route::get('/', function(){
    return view('index');
});

Route::get('/post', function(){
    return view('post');

});

// Route::view('maine', '/puth');

Route::get('/post/firstpost', function(){
    return view('minnatur');

});
