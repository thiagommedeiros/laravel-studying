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

/* RODAS DE FILMES */
Route::get('/filmes', 'FilmeController@exibirFilmes');

Route::get('/filme/add', 'FilmeController@exibirForm');
Route::post('/filme/add', 'FilmeController@cadastrar');

Route::get('/filme/edit/{id}', 'FilmeController@editForm');
Route::put('/filme/edit/{id}', 'FilmeController@update');

Route::get('/filme/delete/{id}', 'FilmeController@delete');