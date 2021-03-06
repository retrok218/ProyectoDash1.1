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

// Route::get('/admin', 'SidebarController@index');

Route::get('/', function () {
    return view('load');
});


Route::get('/admin','AdminController@index');

Route::get('/user', 'UserController@index');
Route::get('/grafica', 'GraficController@index');
