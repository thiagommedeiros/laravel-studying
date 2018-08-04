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

// exercício 2
// item a
Route::get('meuPrimeiroCaminho/', function(){
  return  'Criei primeiro caminho em Laravel';
});

// item b
Route::get('resultado/{numero}', function($numero){
      if ($numero % 2 == 0) {
        return "Par";
      }else {
        return 'Ímpar';
    }
});

// item c
Route::get('resultado/{numero}/numeroOpcional/{numeroOpcional}', function($numero, $numeroOpcional){
  if ($numeroOpcional === null) {
    if ($numero % 2 === 0) {
      return 'Par';
    }else {
      return 'Ímpar';
    }
  }else {
    return $numero * $numeroOpcional;
  }
});
