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

//Principal
Route::get('/productos','ProductosController@index');

//Categorias
Route::get('/videojuegos','ProductosController@videojuegos');
Route::get('/electronica','ProductosController@electronica');
Route::get('/tecnologia','ProductosController@tecnologia');
Route::get('/hogar','ProductosController@hogar');
Route::get('/mascotas','ProductosController@mascotas');


//Subcategorias
Route::get('/entretenimiento','ProductosController@entretenimiento');
Route::get('/familiar','ProductosController@familiar');
Route::get('/computacion','ProductosController@computacion');
Route::get('/comida','ProductosController@comida');
Route::get('/telefonia','ProductosController@telefonia');
Route::get('/salud','ProductosController@salud');
Route::get('/paseo','ProductosController@paseo');

//Precios
Route::get('/precio1','ProductosController@precio1');
Route::get('/precio2','ProductosController@precio2');
Route::get('/precio3','ProductosController@precio3');
Route::get('/precio4','ProductosController@precio4');
Route::get('/precio5','ProductosController@precio5');


