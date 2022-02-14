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

Route::get('/login', 'LoginController@authenticate')->name('login');
Route::get('/logout', 'LoginController@logout')->name('logout');

Route::get('/producto/listar', 'ProductController@list')->name('stand');
Route::get('/reporte/listar', 'ProductController@list')->name('chart');
Route::get('/configuracion/listar', 'ProductController@list')->name('configuration');

