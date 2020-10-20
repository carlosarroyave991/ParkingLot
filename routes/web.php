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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

//RUTAS CLIENTE
Route::get('cliente', function(){
    return view('cliente.index');
});
Route::get('cliente/create', function(){
    return view('cliente.create');
});
Route::post('cliente/store',function(){
    return view('cliente.store');
});
Route::get('cliente/edit/{id}','ClienteController@edit')->name('store');
Route::put('cliente/update/{id}','ClienteController@update')->name('update');
Route::delete('cliente/destroy/{id}','ClienteController@destroy')->name('destroy');

