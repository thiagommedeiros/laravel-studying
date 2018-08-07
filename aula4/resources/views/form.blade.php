<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Adicionar Filme</title>
</head>
<body>
@if (count($errors) > 0)
  <div class="col-6 m-auto">
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
          <span align="center" class="d-block">{{ $error }}</span>
        @endforeach
    </div>
  </div>
@endif
<h1 align="center">Formulário</h1>
<form method="post" action="{{ url('/adicionar') }}">
  {{-- {{ csrf_field() }} --}}
  @csrf
    <div class="form-group col-6 m-auto">
        <label for="titulo">Título</label>
        <input type="text" class="form-control" value=" {{ old('title') }} " name="title" id="titulo"/>
    </div>
    <div class="form-group col-6 m-auto">
        <label for="classificacao">Classificação</label>
        <input type="text" class="form-control" value="{{old('rating')}}" name="rating" id="classificacao"/>
    </div>
    <div class="form-group col-6 m-auto">
        <label for="premios">Prêmios</label>
        <input type="text" class="form-control" value="{{old('awards')}}" name="awards" id="premios"/>
    </div>
    <div class="form-group col-6 m-auto">
        <label for="duracao">Duração</label>
        <input type="text" class="form-control" value="{{old('length')}}" name="length" id="duracao"/>
    </div>
    <div class="form-group col-6 m-auto">
      <label>Data de estreia</label>
        <select name="dia" class="form-control">
          <option value="">Dia</option>
            @for ($i=1; $i < 32; $i++)
              <option value="2"><?php echo $i ?></option>
            @endfor
        </select>
        <select name="mes" class="form-control">
          <option value="">Mês</option>
            @for ($i=0; $i < 13; $i++)
              <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            @endfor
          </select>
          <select name="ano" class="form-control">
            <option value="">Ano</option>
              @for ($i=2019; $i >= 1900; $i--)
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
              @endfor
          </select>
        </div>
      </div>
      <br>
      <div class="form-group col-6 m-auto">
        <input type="submit" value="Adicionar Filme" name="submit" class="btn btn-primary"/>
      </div>
    </form>
  </body>
</html>
