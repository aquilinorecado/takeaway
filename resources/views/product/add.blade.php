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
              
                  <h1>Adicionar Novo Produto </h1>
              
              <div>
                  <a href="{{ route('product.index') }}" class="label label-primary">Voltar</a>
              </div>
          </div>
          <div class="row">
            <div class="span10 offset1">
                <form action="{{ route('product.insert') }}" method="POST" class="form-horizontal well">
                  <fieldset>
                    {{ csrf_field() }}
                    <div class="control-group">
                        <label class="control-label" >Nome :</label>
                       <div class="controls">
                            <input type="text" name="name" id="name" class="input-xlarge">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" > Pre&ccedil;o :</label>
                       <div class="controls">
                            <input type="text" name="price" id="price" class="input-xlarge">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" >Detalhes :</label>
                       <div class="controls">
                            <input type="text" name="details" id="details" class="input-xlarge">
                        </div>
                    </div>                    
                    <div class="control-group">
                        <label class="control-label" >TakeAway :</label>
                       <div class="controls">
                            <input type="text" name="takeaway_id" id="takeaway_id" class="input-xlarge">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" > Gestor :</label>
                       <div class="controls">
                            <input type="text" name="takeaway_id" id="takeaway_id" class="input-xlarge" value="{{ Auth::user()->id }}" readonly="yes">
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