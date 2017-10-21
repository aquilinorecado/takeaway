@extends('layouts.app')

@section('content')

                <div class="page-header">
                    <h1>Alterar a sua Password</h1>
                </div>

                
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="span10 offset1">

                            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}" class="bs-docs-example">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email">Endere&ccedil;o E-Mail</label>

                                    <div>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                </br>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Enviar o link de altera&ccedil;&atilde;o da Password.
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>

@endsection
