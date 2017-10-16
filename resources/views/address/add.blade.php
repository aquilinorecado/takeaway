@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-10 col-md-offset-1">
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
                Adicionar Novo Endere&ccedil;o <a href="{{ route('address.index') }}" class="label label-primary pull-right">Voltar</a>
            </div>
            <div class="panel-body">
                <form action="{{ route('address.insert') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    
                    <div class="form-group">
                        <label class="control-label col-sm-3" >Rua :</label>
                        <div class="col-sm-9">
                            <input type="text" name="road" id="road" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                         <label class="control-label col-sm-3" >Avenida :</label>
                        <div class="col-sm-9">
                            <input type="text" name="av" id="av" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                         <label class="control-label col-sm-3" >Bloco/Quarteir&atilde;o :</label>
                        <div class="col-sm-9">
                            <input type="text" name="block" id="block" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                         <label class="control-label col-sm-3" >Provincia :</label>
                        <div class="col-sm-9">
                            <input type="text" name="province" id="province" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                         <label class="control-label col-sm-3" >Numero :</label>
                        <div class="col-sm-9">
                            <input type="text" name="number" id="number" class="form-control">
                        </div>
                    </div>
                         
                    
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <input type="submit" class="btn btn-default" value="Salvar" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection