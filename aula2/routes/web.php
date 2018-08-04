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

// exercício 1
// item b
Route::get('/filmes/procurarId/{id}', 'FilmesController@procurarFilmeId');

// item c
Route::get('/filmes/procurarNome/{nome}', 'FilmesController@procurarFilmeNome');

// item e
Route::get('/adicionarFilme/{filme}', 'FilmesController@adicionarFilme');

// item f
Route::get('/listarFilmes', 'FilmesController@listarFilmes');
