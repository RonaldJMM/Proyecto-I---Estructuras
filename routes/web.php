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
Route::get('/index', function () {
    return view('index');
});
Route::get('/definicion', function () {
    return view('definicion');
});

Route::get('/clasificacion', function () {
    return view('clasificacion');
});

Route::get('/tipos', function () {
    return view('tipos');
});

Route::get('/medios', function () {
    return view('medios');
});

Route::get('/ejercicio', function () {
    return view('ejercicio');
});


Route::post('formulario','LogicaEjercicioController@gestionMatriz');

Route::get('/ejercicio2', function () {
    return view('ejercicio2');
});
Route::post('formulario2','ControladorEjercicio2@MatrizEjercicio2');