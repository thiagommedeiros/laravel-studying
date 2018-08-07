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
    if (count($ator) >= 0) {
      $ator = $ator[0]['first_name'] . " " . $ator[0]['last_name'];
      return view('atores')->with('ator', $ator);
    } else {
      return view('atores')->with('ator', 'desculpa esse ator não existe');
    }
  }
}
