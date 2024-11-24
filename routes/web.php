<?php

use Illuminate\Support\Facades\Route;
//use \App\Http\Controllers\PostController;
//use \App\Http\Controllers;

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


Route::get('/plan', function () {
    return view('plan');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/', 'PostController@index');

Route::get('/{id}/products', 'PostController@product')->name("products");

// Route::get('/view', function () {
//     return view('login');
// });
// Route::get('/', function () {
//     return view('index');
// });
