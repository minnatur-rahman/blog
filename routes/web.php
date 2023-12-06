<?php

use App\Http\Controllers\WebPageController;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Support\Facades\Route;



Route::get('/', function(){
    return view('index');
});

Route::get('/post/{id}', function (string $id){
    if($id){
        return "<h1>Hi I am New Id : " .$id.  " </h1>";
    }else{
        return "<h1>No Id Found</h1>";
    }

})->whereIn('id', ['Movie', 'song', 'painting']);

