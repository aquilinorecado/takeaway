@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Ver Tipos de Pagamentos</h2>
                        </div>
                        <div class="pull-right">
                            <a href="{{ route('top.index') }}" class="label label-primary pull-right"> Voltar</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Descri&ccedil;&atilde;o :</strong>
                            {{ $top->description }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Estado :</strong>
                            {{ $top->state }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Criado em :</strong>
                            {{ $top->created_at }}
                        </div>
                    </div>
            </div>
        </div>
</div>
@endsection