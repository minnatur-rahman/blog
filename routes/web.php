<?php

use App\Http\Controllers\WebPageController;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Support\Facades\Route;



Route::get('/', function(){
    return view('index');
});

Route::get('/post/{id}/commend/{commend}', function (string $id, string $commend){
    if($id){
        return "<h1>Hi I am New Id : " .$id.  "& commend : $commend </h1>";
    }else{
        return "<h1>No Id Found</h1>";
    }

})->where('id', '[0-9]+')->whereAlpha('commend', );

