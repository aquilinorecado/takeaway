extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <div class="col-lg-12">
        @if($errors->any())
            <div class="alert alert-danger">
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
                Adicionar Novo level do Usuario  <a href="{{ route('userlevel.index') }}" class="label label-primary pull-right">Voltar</a>
            </div>
            <div class="panel-body">
                <form action="{{ route('userlevel.insert') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    
                    <div class="form-group">
                        <label class="control-label col-sm-3" >Descri&ccedil;&atilde;o  :</label>
                        <div class="col-sm-9">
                            <input type="text" name="road" id="description" class="form-control">
                        </div>

                    </div>
                    <div class="form-group">
                         <label class="control-label col-sm-3" >Estado :</label>
                        <div class="col-sm-9">
                            <input type="text" name="av" id="state" class="form-control">
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