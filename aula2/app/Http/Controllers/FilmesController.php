<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmesController extends Controller
{
    /**
     * @var array $listaDeFilmes;
     */
    private $listaDeFilmes;

    public function __construct()
    {
      $this->listaDeFilmes = [
        1 => "Toy Story",
        2 => "Procurando Nemo",
        3 => "Avatar",
        4 => "Star Wars: Episódio V",
        5 => "Up",
        6 => "Mary e Max"
      ];
    }

    public function setListaDeFilmes($filme)
    {
      $this->listadlistaDeFilmes[] = $filme;
    }

    public function getListaDeFilmes()
    {
      return $this->listaDeFilmes;
    }

    public function procurarFilmeId($id)
    {
      $resultado = "";
      foreach ($this->getListaDeFilmes() as $key => $value){
        if ($id == $key){
          $resultado = $value;
          break;
        } else {
          $resultado = "Não existe esse filme";
        }
      }
      return view('filmes')->with('resultado', $resultado);
    }

    public function procurarFilmeNome($nome)
    {
      $resultado = "";
      foreach ($this->getListaDeFilmes() as $key => $value){
        if ($nome == $value){
          $resultado = $value;
          break;
        } else {
          $resultado = "Não existe esse filme";
        }
      }
      return view('filmes')->with('resultado', $resultado);
    }

    public function adicionarFilme($filme)
    {
      $this->setListaDeFilmes($filme);
      return "Filme Adicionado com sucesso";
    }

    public function listarFilmes()
    {
      return view('todosOsFilmes')->with('listaDeFilmes', $this->getListaDeFilmes());
    }
}
