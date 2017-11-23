@extends('layouts.app')

@section('content')

<section id="forms">

          <div class="page-header">
              
                  <h1>Adicionar Novo Usu&aacute;rio </h1>
              
              <div>
                  <a href="{{ route('home') }}" class="label label-primary">Voltar</a>
              </div>
          </div>
          <div class="row">
            <div class="span10 offset1">
                <form  method="POST" action="{{ route('register') }}" class="form-horizontal well">
                  <fieldset>

                    <div class="bs-docs-example">
                      <div class="tabbable" style="margin-bottom: 18px;">
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#tab1" data-toggle="tab">Seus Dados Pessoais </a></li>
                        </ul>
                        <div class="tab-content" style="padding-bottom: 9px; border-bottom: 1px solid #ddd;">
                          <div class="tab-pane active" id="tab1">
                      
                              {{ csrf_field() }}
                                <div class="control-group">
                                    <label class="control-label" >Nome Completo :</label>
                                   <div class="controls">
                                        <input type="text" value="{{ old('name') }}" name="name" id="name" class="input-xlarge">
                                        @if ($errors->has('name'))
                                          <span class="alert alert-danger">
                                              <strong>{{ $errors->first('name') }}</strong>
                                          </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" > Email :</label>
                                   <div class="controls">
                                        <input type="email" value="{{ old('email') }}" name="email" id="email" class="input-xlarge">
                                        @if ($errors->has('email'))
                                          <span class="alert alert-danger">
                                              <strong>{{ $errors->first('email') }}</strong>
                                          </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" >Password :</label>
                                   <div class="controls">
                                        <input type="password" name="password" id="password" class="input-xlarge">
                                        @if ($errors->has('password'))
                                          <span class="alert alert-danger">
                                              <strong>{{ $errors->first('password') }}</strong>
                                          </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" >Confirmar password :</label>
                                   <div class="controls">
                                        <input type="password" name="password_confirmation" id="password-confirm" class="input-xlarge">
                                    </div>
                                </div> 
                                <div class="control-group">
                                    <label class="control-label" >Telefone :</label>
                                   <div class="controls">
                                        <input type="text" name="phone" id="phone" class="input-xlarge">
                                        @if ($errors->has('phone'))
                                          <span class="alert alert-danger">
                                              <strong>{{ $errors->first('phone') }}</strong>
                                          </span>
                                        @endif
                                    </div>
                                </div> 
                                <div class="control-group">
                                    <label class="control-label" >Nivel do usu&aacute;rio :</label>
                                   <div class="controls">
                                        <select id="userlevel_id" name="userlevel_id" class="input-xlarge">
                                            <option></option>
                                            <option value="1">Administrador</option>
                                            <option value="2">Cliente</option>
                                        </select >
                                        @if ($errors->has('userlevel_id'))
                                          <span class="alert alert-danger">
                                              <strong>{{ $errors->first('userlevel_id') }}</strong>
                                          </span>
                                        @endif
                                    </div>
                                </div>             
                                                       

                            <div class="form-actions">
                                <input type="submit" class="btn btn-default" value="Salvar" />
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