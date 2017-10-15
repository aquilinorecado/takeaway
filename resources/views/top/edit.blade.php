@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        @if($errors->any())
            <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach()
            </div>
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">
                Editar Tipos de Pagamentos <a href="{{ route('top.index') }}" class="label label-primary pull-right">Voltar</a>
            </div>
            <div class="panel-body">
                <form action="{{ route('top.update', $top->id) }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Descri&ccedil;&atilde;o</label>
                        <div class="col-sm-10">
                            <input type="text" name="description" id="description" class="form-control" value="{{ $top->description }}">
                        </div>
                    </div>
                    <div class="form-group">
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
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-default" value="Salvar" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection