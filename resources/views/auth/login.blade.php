@extends('layouts.app')

@section('content')
<section id="forms">
                    <div class="page-header"> 
                       <h1> Login ao Takeaway Locator </h1> 
                    </div>

                    <div class="row">
                        <div class="span10 offset1">
                            <form class="bs-docs-example form-horizontal" method="POST" action="{{ route('login') }}">
                              {{ csrf_field() }}                         
                              <div class="control-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label class="control-label" for="email" >O seu E-Mail</label>
                                <div div class="controls">
                                    <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="O seu E-Mail" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                              </div>
                              <div class="control-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="control-label" for="inputPassword">Password</label>
                                <div class="controls">
                                  <input id="password" type="password" name="password" placeholder="Password" required>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                </div>
                              </div>
                              <div class="control-group">
                                <div class="controls">
                                  <label class="checkbox">
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Gravar a Password.
                                  </label>
                                  <button type="submit" class="btn">Login</button>
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
