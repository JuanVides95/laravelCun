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


Route::get('/autor', 'autor_controller@index');
/*
Route::get('/mi_primer_ruta/{name}', function($name){
	return 'Hola Mundo soy '.$name;
});*/

