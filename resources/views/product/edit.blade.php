@extends('layouts.app')

@section('content')
<section id="forms">

          <div class="page-header">
              
                  <h1>Editar products com o codigo {{$product->id}} </h1>
              
              <div>
                  <a href="{{ route('product.index') }}" class="label label-primary">Voltar</a>
              </div>
          </div>
          <div class="row">
            <div class="span10 offset1">
                <form action="{{ route('product.update', $product->id) }}" method="POST" class="form-horizontal well">
                  <fieldset>
                    {{ csrf_field() }}
                    
                    <div class="control-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label class="control-label" >Nome :</label>
                                   <div class="controls">
                                        <input value="{{ $product->name }}" type="text" name="name" id="name" class="input-xlarge" autofocus>
                                        @if ($errors->has('name'))
                                          <span class="alert alert-danger">
                                              <strong>{{ $errors->first('name') }}</strong>
                                          </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="control-group {{ $errors->has('price') ? ' has-error' : '' }}">
                                    <label class="control-label" > Pre&ccedil;o :</label>
                                   <div class="controls">
                                        <input type="number" step="0.01" min="0" name="price" id="price" value="{{ $product->price }}" class="input-xlarge">
                                        @if ($errors->has('price'))
                                          <span class="alert alert-danger">
                                              <strong>{{ $errors->first('price') }}</strong>
                                          </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" >Detalhes :</label>
                                   <div class="controls">
                                        <input type="text" value="{{ $product->details }}" name="details" id="details" class="input-xlarge">
                                        @if ($errors->has('details'))
                                          <span class="alert alert-danger">
                                              <strong>{{ $errors->first('details') }}</strong>
                                          </span>
                                        @endif
                                    </div>
                                </div>                    
                               
                                <div class="control-group">
                                    <label class="control-label" > Gestor :</label>
                                   <div class="controls">
                                        <select id="user_id" name="user_id" class="input-xlarge">
                                            <option value="{{Auth::user()->id}}">{{Auth::user()->name}}</option>
                                        </select >
                                        @if ($errors->has('user_id'))
                                          <span class="alert alert-danger">
                                              <strong>{{ $errors->first('user_id') }}</strong>
                                          </span>
                                        @endif
                                    </div>                                    
                                </div>

                                <div class="control-group">
                                <label class="control-label" > Tags :</label>
                               <div class="controls">
                                    <input data-role="tagsinput" type="text" name="tags" value="{{ $product->tags }}" >
                                         
                                    @if ($errors->has('tags'))
                                        <span class="alert alert-danger">
                                            <strong>{{ $errors->first('tags') }}</strong>
                                        </span>
                                    @endif
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