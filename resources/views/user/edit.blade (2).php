@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <br>            

                <div class="col-lg-12">
                    @if($errors->any())
                        <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach()
                        </div>
                    @endif
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Editar Usuario<a href="{{ route('user.index') }}" class="label label-primary pull-right">Voltar</a>
                        </div>
                        <div class="panel-body">
                            <form action="{{ route('user.update', $address->id) }}" method="POST" class="form-horizontal">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="smFormGroupInput" class="control-label col-sm-2" >Nome do usuario :</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="road" id="road" class="form-control" value="{{ $address->road }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="smFormGroupInput" class="control-label col-sm-2" >Avenida :</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="av" id="av" class="form-control" value="{{ $address->av }}">
                                    </div>
                                </div>
                               
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <input type="submit" class="btn btn-default" value="Salvar" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection