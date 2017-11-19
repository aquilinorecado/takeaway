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
                <form action="{{ route('product.insert') }}" method="POST" class="form-horizontal well" enctype="multipart/form-data">
                  <fieldset>

                    <div class="bs-docs-example">
                      <div class="tabbable" style="margin-bottom: 18px;">
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#tab1" data-toggle="tab">Descri&ccedil;ao do Produto</a></li>
                          <li><a href="#tab2" data-toggle="tab">Imagens</a></li> 
                        </ul>
                        <div class="tab-content" style="padding-bottom: 9px; border-bottom: 1px solid #ddd;">
                          <div class="tab-pane active" id="tab1">
                            <p>I'm in Section 1.</p>

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
                                        <input type="number" name="price" id="price" class="input-xlarge">
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
                                        <select id="takeaway_id" class="input-xlarge">
                                            <option></option>
                                            @foreach($takeaways as $takeaway)
                                            <option value="{{$takeaway->id}}">{{$takeaway->name}}</option>
                                            @endforeach
                                        </select >
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" > Gestor :</label>
                                   <div class="controls">
                                        <select id="user_id" class="input-xlarge">
                                            <option></option>
                                            @foreach($users as $user)
                                            <option value="{{$user->id}}">{{$user->name}}</option>
                                            @endforeach
                                        </select >
                                    </div>
                                </div>
                    


                          </div>
                          <div class="tab-pane" id="tab2">
                            
                            <div class="control-group">
                                <label class="control-label" > Imagem 1 :</label>
                               <div class="controls">
                                    <input type="file" name="image1" />
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" > Imagem 2 :</label>
                               <div class="controls">
                                    <input type="file" name="image2" />
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" > Imagem 3 :</label>
                               <div class="controls">
                                    <input type="file" name="image3" />
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