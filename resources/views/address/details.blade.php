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
                            <h2>Visualizar o Endere&ccedil;o</h2>
                        </div>
                        <div class="pull-right">
                            <a href="{{ route('address.index') }}" class="label label-primary pull-right"> Voltar</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Codigo :</strong>
                            {{ $address->id }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Rua :</strong>
                            {{ $address->road }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Avenida :</strong>
                            {{ $address->av }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Bloco \ Quarteir&atilde;o :</strong>
                            {{ $address->block }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Provincia :</strong>
                            {{ $address->province }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Numero :</strong>
                            {{ $address->number }}
                        </div>
                    </div>                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection