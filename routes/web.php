<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




# Task 1
Route::get('/stringreducer/{value?}', 'MainController@stringReducer');


# Task 4
Route::get('/', 'MainController@index');
Route::get('product', 'ProductController@index');
Route::get('cart', 'CartController@index');