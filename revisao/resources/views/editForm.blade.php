@if (isset($sucesso) && $sucesso)
  Filme cadastrado com sucesso!
@endif

@if (isset($ocorreuErro) && $ocorreuErro)
  Ops, ocorreu um erro, tente novamente!
@endif

<form method="post" action="/filme/edit/{{ $filme->id }}">
  {{ csrf_field() }}
  {{ method_field('PUT') }}
  <div class="form-group col-6 m-auto">
      <label for="titulo">Título</label>
      <input type="text" class="form-control" name="title" value="{{ $filme->title }}" />
  </div>
  <div class="form-group col-6 m-auto">
      <label for="classificacao">Classificação</label>
      <input type="text" class="form-control" name="rating" value="{{ $filme->rating }}"/>
  </div>
  <div class="form-group col-6 m-auto">
      <label for="premios">Prêmios</label>
      <input type="text" class="form-control" name="awards" value="{{ $filme->awards }}"/>
  </div>
  <div class="form-group col-6 m-auto">
      <label for="duracao">Duração</label>
      <input type="text" class="form-control" name="length" value="{{ $filme->length }}"/>
  </div>
  <div class="form-group col-6 m-auto">
    <label>Data de estreia</label>
      <input type="date" name="release_date" value="{{ $filme->release_date }}">
      </div>
    </div>
    <br>
    <div class="form-group col-6 m-auto">
      <input type="submit" value="Atualizar Filme" name="submit" class="btn btn-primary"/>
    </div>
</form>