@extends('layouts.app')

@section('content')

<section id="typography">
  <div class="bs-docs-example">
    <div class="hero-unit">
      <h1>Bem Vindo!</h1>
      <p>O TakeAway Locator &eacute; um website disponivel para publicitar produtos e servi&ccedil;os disponiveis em todos os TakeAways da provincia e cidade de Maputo.</p>
      <p><a class="btn btn-primary btn-large">Cadastre j&aacute; o seu TakeAway</a></p>
    </div>
    <div class="container">
	    <div class="class="span10 offset1"">
	        <div class="row">
	            <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
	            <h2>Perfil do {{ $user->name }}</h2>
	            <form enctype="multipart/form-data" action="/profile" method="POST">
	                <label>Atualizar Image do Perfil</label>
	                <input type="file" name="avatar">
	                <input type="hidden" name="_token" value="{{ csrf_token() }}">
	                <input type="submit" class="pull-right btn btn-sm btn-primary">
	            </form>
	        </div>
	    </div>
	</div>
  </div>
</section>

@endsection
