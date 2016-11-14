<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/*
 *
 *CLIENTE
 *
 */
Route::get('/cliente/listar', "clienteController@getListar")->name("cliente.listar");
Route::get('/cliente/editar/{id}', "clienteController@getEditar")->name("cliente.editar");
Route::get('/cliente/excluir/{id}', "clienteController@getExcluir")->name("cliente.excluir");

Route::get('/cliente/novo', "clienteController@getNovo")->name("cliente.novo");
Route::post('/cliente/novo', "clienteController@postNovo")->name("cliente.novo");


/*
 *
 *CIDADE
 *
 */

/*Route::get('/cliente/novo', "cidadeControler@getListar")->name("cidade.listar");*/