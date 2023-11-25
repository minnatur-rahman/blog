<?php

use App\Http\Controllers\WebPageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WebPageController::class, 'index']);


Route::get('/about', [WebPageController::class, 'about']);


Route::get('/contact', [WebPageController::class, 'contact']);


Route::get('/shajid', [WebPageController::class, 'shajid']);
