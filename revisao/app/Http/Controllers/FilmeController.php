<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filme;

class FilmeController extends Controller
{
    public function delete ($id) {
        $filme = Filme::find($id);
        $filme->delete();

        return 'Filme excluido com sucesso!';
    }

    public function exibirForm () {
        return view('form');
    }

    public function exibirFilmes () {
        $filmes = Filme::all();

        return view('todosFilmes')->with('filmes', $filmes);
    }

    public function editForm ($id) {
        $filme = Filme::find($id);

        return view('editForm')->with('filme', $filme);
    }

    public function update (Request $request, $id) {        
        $filme = Filme::find($id);
        
        $filme->title = $request->input('title');
        $filme->rating = $request->input('rating');
        $filme->awards = $request->input('awards');
        $filme->length = $request->input('length');
        $filme->release_date = $request->input('release_date');

        $sucesso = $filme->save();

        $todosFilmes = Filme::all();

        if ($sucesso) {
            return view('todosFilmes')
                ->with('edicaoSucesso', true)
                ->with('filmes', $todosFilmes);
        } else {
            return view('todosFilmes')
                ->with('ocorreuErro', true)
                ->with('filmes', $todosFilmes);
        }
    }

    public function cadastrar (Request $request) {
        $this->validate($request, [
            'title' => 'required|max:3',
            'rating' => 'numeric|min:0|max:10',
            'awards' => 'numeric|min:0',
            'length' => 'numeric|min:0',
            'release_date' => 'date',
        ]);

        $filme = Filme::create([
            'title' => $request->input('title'),
            'rating' => $request->input('rating'),
            'awards' => $request->input('awards'),
            'length' => $request->input('length'),
            'release_date' => $request->input('release_date')
        ]);

        $sucesso = $filme->save();

        if ($sucesso) {
            return view('form')->with('sucesso', true);
        } else {
            return view('form')->with('ocorreuErro', true);
        }

    }
}
