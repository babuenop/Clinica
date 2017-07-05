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

//Rutas Usuarios 
Route::resource('/user', 'usercontroller'); 

Route::resource('/expedientes', 'expedienteController');
Route::post('expedientes/registro','expedienteController@store');
Route::post('expedientes/index','expedienteController@index');

Route::resource('/motivos', 'motivoController');
Route::post('motivos/motivo','motivoController@store');
Route::post('motivos/index','motivoController@index');

Route::resource('registrosatencion', 'registroatencionController');
Route::post('registrosatencion/registro','registroatencionController@store');


Route::resource('registrosmedicos', 'registromedicoController');