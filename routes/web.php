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

// Rutas con autentificacion requerida para cualquier acción
Route::group(['middleware'=>'auth'], function() {
    // Ruta con todas las operacion CRUD
    //Rutaa del controlador de clientes
    Route::resource('/cliente','ClienteController');
    //Ruta del controlador de vehiculos
    Route::resource('/vehiculo','VehiculoController');
    //Ruta del controlador del parqueadero
    Route::resource('/parqueadero','ParqueaderoController');
});
