@extends('layouts.app')

@section('content')
<section id="forms">

        @if($errors->any())
            <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach()
            </div>
        @endif
          <div class="page-header">
              
                  <h1>Editar level de Usuarios </h1>
              
              <div>
                  <a href="{{ route('top.index') }}" class="label label-primary">Voltar</a>
              </div>
          </div>
          <div class="row">
            <div class="span10 offset1">
                <form action="{{ route('top.update', $top->id) }}" method="POST" class="form-horizontal well">
                  <fieldset>
                    {{ csrf_field() }}
                    <div class="control-group">
                        <label class="control-label" >Descri&ccedil;&atilde;o :</label>
                       <div class="controls">
                            <input type="text" name="description" id="description" class="input-xlarge" value="{{ $top->description }}">
                        </div>
                    </div>
                    <div class="control-group">
                       <label for="smFormGroupInput" class="control-label">Estado : </label>
                          <div class="controls">
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
                    <div class="form-actions">
                          <input type="submit" class="btn btn-default" value="Salvar" />
                          <button type="reset" class="btn">Cancel</button>
                    </div>
                  </fieldset>
                </form>
            </div>
          </div>
</section>
@endsection