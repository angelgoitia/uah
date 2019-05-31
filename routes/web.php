<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::fallback('HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('auth');

Route::get('logout', 'Auth\LoginController@logout');

Route::get('/home', 'ProductosController@index')->middleware('auth'); //muestra registro
Route::post('home/action', 'ProductosController@action'); 
