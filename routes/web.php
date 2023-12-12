<?php

use App\Http\Controllers\WebPageController;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Support\Facades\Route;


function getUsers(){
    return [
        1 =>['name' => 'Allha', 'phone' => '6543217', 'city' => 'asman'],
        2 =>['name' => 'Muhammad', 'phone' => '6509876', 'city' => 'jamin'],
        3 =>['name' => 'Musa', 'phone' => '5433217', 'city' => 'bagdad'],
        4 =>['name' => 'Umor', 'phone' => '7653217', 'city' => 'shoudi'],
        5 =>['name' => 'minnatur', 'phone' => '0173758477', 'city' => 'Gazipur'],
];

};

Route::get('/', function(){
   return view('welcome');
});

Route::get('/pon', function(){

    // $name = 'Minnatur Rahmen';

    $names = getUsers();

    return view('users', [
        'user' => $names,
        'city' => 'Dhaka'
    ]);

//    return view('users')
//    ->with('user', $name)
//    ->with('city', 'Dhaka');

    //  return view('users')
    //  ->withUser($name)
    //  ->withCity('Dhaka');


 });

 Route::get('/user/{id}', function($id){
     $users = getUsers();
     abort_if(!isset($users[$id]), 404);

     $user = $users[$id];

    return view('user', ['id' => $user]);
 })->name("view.user");








