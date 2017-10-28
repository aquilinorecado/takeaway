@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <br>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Visualizar Categoria</h2>
                        </div>
                        <div class="pull-right">
                            <a href="{{ route('categorie.index') }}" class="label label-primary pull-right"> Voltar</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Codigo :</strong>
                            {{ $categorie->id }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Descri&ccedil;&atilde;o :</strong>
                            {{ $categorie->description }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Estado :</strong>
                            {{ $categorie->state }}
                        </div>
                    </div>
                              
                </div>
            </div>
        </div>
    </div>
</div>
@endsection