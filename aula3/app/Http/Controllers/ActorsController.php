<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Actor;

class ActorsController extends Controller
{
  public function show($id)
  {
    $ator = Actor::find($id);
    return view('ator')->with('ator', $ator->getNomeCompleto())->with('info', $ator->getInfo());
  }

  public function directory(){
    $atores = Actor::all();
    return view('atores')->with('atores', $atores);
  }

  public function search(Request $nome) {
    $nome = $nome->input("nome");
    $ator = Actor::where('first_name', 'LIKE', '%' . $nome . '%')->get();
    return view('atores')->with('ator', $ator);
  }
}
