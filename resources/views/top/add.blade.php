@extends('master')
@section('content')
<div class="container">
  <div class="panel panel-default">
      <div class="panel-heading">
        Cadastro de Tipos de Pagamento
      </div>

  </div>
  <form>
    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Descri&ccedil;&atilde;o : </label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Ex. Cash" name="description">
      </div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Estado : </label>
      <div class="col-sm-10">
        <div class="radio">
          <label>
            <input type="radio" name="state" id="lgFormGroupInput" value="1" checked>
              Activo :
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="state" id="lgFormGroupInput" value="0">
              Disactivo :
          </label>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-2"></div>
      <input type="submit" class="btn btn-primary">
    </div>
  </form>
</div>
@endsection