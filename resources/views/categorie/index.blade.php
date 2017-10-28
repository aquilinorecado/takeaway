@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <br>
            <div class="col-lg-12">
                @if(Session::has('success_msg'))
                <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
                @endif
            <!-- Posts list -->
            @if(!empty($categories))
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Lista de Categorias </h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-success" href="{{ route('categorie.add') }}"> Adicionar Nova categoria</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <table class="table table-striped task-table">
                            <!-- Table Headings -->
                            <thead>
                                <th width="5%">ID</th>
                                <th width="5%">Descri&ccedil;&atilde;o</th>
                                <th width="20%">Estado</th>            
                            </thead>
            
                            <!-- Table Body -->
                            <tbody>
                            @foreach($categories as $categorie)
                                <tr>
                                    <td class="table-text">
                                        <div>{{$categorie->id}}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{$categorie->description}}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{$categorie->state}}</div>
                                    </td>
                                        <a href="{{ route('categorie.details', $categorie->id) }}">
                                          <span class="glyphicon glyphicon-eye-open"></span>
                                        </a>

                                        <a href="{{ route('categorie.edit', $categorie->id) }}">
                                          <span class="glyphicon glyphicon-edit"></span>
                                        </a>

                                        <a href="{{ route('categorie.delete', $categorie->id) }}" onclick="return confirm('Tens a certeza que pretende remover?')">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                        
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
            </div>
        </div>
    </div>
</div>
@endsection