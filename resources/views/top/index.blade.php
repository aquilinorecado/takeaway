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
            @if(!empty($tops))
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Lista dos Tipos de Pagamentos </h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-success" href="{{ route('top.add') }}"> Adicionar Novo TOP</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <table class="table table-striped task-table">
                            <!-- Table Headings -->
                            <thead>
                                <th width="15%">Codigo</th>
                                <th width="40%">Descri&ccedil;&atilde;o</th>
                                <th width="15%">Estado</th>
                                <th width="20%">Opera&ccedil;&atilde;o</th>
                            </thead>
            
                            <!-- Table Body -->
                            <tbody>
                            @foreach($tops as $top)
                                <tr>
                                    <td class="table-text">
                                        <div>{{$top->id}}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{$top->description}}</div>
                                    </td>
                                        <td class="table-text">
                                        <div>{{$top->state}}</div>
                                    </td>
                                    <td>
                                        
                                        <a href="{{ route('top.details', $top->id) }}">
                                          <span class="glyphicon glyphicon-eye-open"></span>
                                        </a>

                                        <a href="{{ route('top.edit', $top->id) }}">
                                          <span class="glyphicon glyphicon-edit"></span>
                                        </a>

                                        <a href="{{ route('top.delete', $top->id) }}" onclick="return confirm('Tens a certeza que pretende remover?')">
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