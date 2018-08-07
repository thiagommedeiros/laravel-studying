<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MoviesController extends Controller
{
  public function formAdd () {
    return view('form');
  }

  public function adicionar(Request $request) {
    $this->validate($request, [
      'title' => 'required|max:100',
      'rating' => 'required|numeric',
      'awards' => 'required|numeric',
      'length' => 'required|numeric'
    ]);

    $movie = Movie::create([
      'title' => $request->input('title'),
      'rating' => $request->input('rating'),
      'awards' => $request->input('awards'),
      'length' => $request->input('length'),
      'release_date' => $request->input('release_date')
    ]);

    $salvar = $movie->save();

    if ($salvar) {
      return view('form')->with('salvo', true);
    } else {
      return view('form')->with('erroAoSalvar', false);
    }
  }
}
