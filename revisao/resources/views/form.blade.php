@if (count($errors) > 0)
  @foreach ($errors->all() as $error)
    {{ $error }}<br>
  @endforeach
@endif

@if (isset($sucesso) && $sucesso)
  Filme cadastrado com sucesso!
@endif

@if (isset($ocorreuErro) && $ocorreuErro)
  Ops, ocorreu um erro, tente novamente!
@endif

<br><br>

<form method="post" action="/filme/add">
  {{ csrf_field() }}
  <div class="form-group col-6 m-auto">
      <label for="titulo">Título</label>
      <input type="text" class="form-control" name="title" value="{{ old('title') }}" />
  </div>
  <div class="form-group col-6 m-auto">
      <label for="classificacao">Classificação</label>
      <input type="text" class="form-control" name="rating" value="{{ old('rating') }}"/>
  </div>
  <div class="form-group col-6 m-auto">
      <label for="premios">Prêmios</label>
      <input type="text" class="form-control" name="awards" value="{{ old('awards') }}"/>
  </div>
  <div class="form-group col-6 m-auto">
      <label for="duracao">Duração</label>
      <input type="text" class="form-control" name="length" value="{{ old('length') }}"/>
  </div>
  <div class="form-group col-6 m-auto">
    <label>Data de estreia</label>
      <input type="date" name="release_date">
      </div>
    </div>
    <br>
    <div class="form-group col-6 m-auto">
      <input type="submit" value="Adicionar Filme" name="submit" class="btn btn-primary"/>
    </div>
</form>