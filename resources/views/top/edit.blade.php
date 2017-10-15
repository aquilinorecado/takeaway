@extends('layouts.app')

@section('content')
<div class="row">
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
                Editar Subcategorias <a href="{{ route('subcateg.index') }}" class="label label-primary pull-right">Voltar</a>
            </div>
            <div class="panel-body">
                <form action="{{ route('subcateg.update', $subcateg->id) }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Nome</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" id="title" class="form-control" value="{{ $subcateg->name }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Descricao</label>
                        <div class="col-sm-10">
                            <textarea name="content" id="content" class="form-control">{{ $subcateg->description }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-default" value="Update Subcategorias" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection