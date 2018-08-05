<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MoviesController extends Controller
{
  public function procurarFilmeId($id)
  {
    $filme = Movie::find($id)['title'];
    return view('filmes')->with('filme', $filme);
  }

  public function procurarFilmeNome($nome)
  {
    $filme = Movie::where('title', 'LIKE', '%' . $nome . '%')->get()[0]['title'];
    return view('filmes')->with('filme', $filme);
  }

  public function listarFilmes()
  {

  }
}
