@extends('layouts.app')

@section('content')
<section class="form">

                <div class="page-header">
                    <h1>Cadastro do Usu&aacute;rio</h1>
                </div>

                <div class="row">
                    <div class="span10 offset1">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}" class="bs-docs-example">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" >Nome Completo</label>

                                <div >
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"  required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" >E-mail</label>

                                <div>
                                    <input id="email" type="email"  name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" >Password</label>

                                <div >
                                    <input id="password" type="password"  name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div >
                                <label for="password-confirm" >Confirmar a Password</label>

                                <div >
                                    <input id="password-confirm" type="password"  name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="phone" >Telefone</label>
                                <div >
                                    <input type="text" name="phone" >
                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            </br>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Cadastrar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
</section>
@endsection
