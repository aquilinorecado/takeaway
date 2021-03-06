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
              
                  <h1>Visualizar Tipo de Pagamento </h1>
              
              <div>
                  <a href="{{ route('top.index') }}" class="label label-primary">Voltar</a>
              </div>
          </div>
          <div class="row">
            <div class="span10 offset1">
                <form action="{{ route('top.insert') }}" method="POST" class="form-horizontal well">
                  <fieldset>
                    {{ csrf_field() }}
                    <div class="control-group">
                        <label class="control-label" >Descri&ccedil;&atilde;o :</label>
                       <div class="controls">
                            <input type="text"  class="input-xlarge" value="{{ $top->description }}" readonly>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" >Estado :</label>
                       <div class="controls">
                            <input type="text"  class="input-xlarge" value="{{ $top->state }}" readonly>
                        </div>
                    </div>
                    
                  </fieldset>
                </form>
            </div>
          </div>
</section>
@endsection