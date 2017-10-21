@extends('layouts.app')

@section('content')
<section id="forms">
                    <div class="page-header"> 
                       <h1> Login ao Takeaway Locator </h1> 
                    </div>

                    <div class="row">
                        <div class="span10 offset1">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}"  class="bs-docs-example" >
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" >Endere&ccedil;o E-Mail</label>

                                    <div>
                                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password">Password</label>

                                    <div>
                                        <input id="password" type="password" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Gravar a Password.
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Login
                                        </button>

                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            Esqueceu a Password?
                                        </a>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
</section>
@endsection
