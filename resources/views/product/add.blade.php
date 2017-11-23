@extends('layouts.app')

@section('content')

<section id="forms">

          <div class="page-header">
              
                  <h1>Adicionar Novo Produto </h1>
              
              <div>
                  <a href="{{ route('product.index') }}" class="label label-primary">Voltar</a>
              </div>
          </div>
          <div class="row">
            <div class="span10 offset1">
                <form action="{{ route('product.insert') }}" method="POST" class="form-horizontal well" enctype="multipart/form-data">
                  <fieldset>

                    <div class="bs-docs-example">
                      <div class="tabbable" style="margin-bottom: 18px;">
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#tab1" data-toggle="tab">Descri&ccedil;ao do Produto</a></li>
                        </ul>
                        <div class="tab-content" style="padding-bottom: 9px; border-bottom: 1px solid #ddd;">
                          <div class="tab-pane active" id="tab1">
                      
                              {{ csrf_field() }}
                                <div class="control-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label class="control-label" >Nome :</label>
                                   <div class="controls">
                                        <input type="text" name="name" value="{{ old('name') }}" id="name" class="input-xlarge" autofocus>
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
                                        <input type="number" value="{{ old('price') }}" step="0.01" min="0" name="price" id="price" class="input-xlarge">
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
                                        <input type="text" name="details" id="details" class="input-xlarge" value="{{ old('details') }}">
                                        @if ($errors->has('details'))
                                          <span class="alert alert-danger">
                                              <strong>{{ $errors->first('details') }}</strong>
                                          </span>
                                        @endif
                                    </div>
                                </div>                    
                                <div class="control-group">
                                    <label class="control-label" >TakeAway :</label>
                                   <div class="controls">                                        
                                        <select id="take_away_id" name="take_away_id" class="input-xlarge">
                                            <option></option>
                                            @foreach(Auth::user()->takeaways as $takeaway)
                                              <option value="{{$takeaway->id}}">{{$takeaway->name}}</option>
                                            @endforeach
                                        </select >
                                        @if ($errors->has('take_away_id'))
                                          <span class="alert alert-danger">
                                              <strong>{{ $errors->first('take_away_id') }}</strong>
                                          </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" > Gestor :</label>
                                   <div class="controls">
                                        <select id="user_id" name="user_id" class="input-xlarge">
                                            <option></option>
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
                                    <input data-role="tagsinput" type="text" name="tags" value="{{ old('tags') }}" >
                                    @if ($errors->has('tags'))
                                        <span class="alert alert-danger">
                                            <strong>{{ $errors->first('tags') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="control-group">
                                <label class="control-label" > Imagem 1 :</label>
                               <div class="controls">
                                    <input type="file" name="image1" value="{{ old('image1') }}" />
                                    @if ($errors->has('images1'))
                                        <span class="alert alert-danger">
                                            <strong>{{ $errors->first('images1') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" > Imagem 2 :</label>
                               <div class="controls">
                                    <input type="file" name="image2" value="{{ old('image2') }}" />
                                    @if ($errors->has('images2'))
                                        <span class="alert alert-danger">
                                            <strong>{{ $errors->first('images2') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" > Imagem 3 :</label>
                               <div class="controls">
                                    <input type="file" name="image3" value="{{ old('image3') }}" />
                                    @if ($errors->has('images3'))
                                        <span class="alert alert-danger">
                                            <strong>{{ $errors->first('images3') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>                            

                            <div class="form-actions">
                                <input type="submit" class="btn btn-default" value="Salvar" />
                                <button type="reset" class="btn">Cancel</button>
                            </div>
                    


                          </div>
                        </div>
                      </div> <!-- /tabbable -->
                    </div>

                    

                </fieldset>

            </form>

            </div>
          </div>
</section>
@endsection