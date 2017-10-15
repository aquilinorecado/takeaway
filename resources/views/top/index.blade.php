@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        @if(Session::has('success_msg'))
        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
        @endif
    <!-- Posts list -->
    @if(!empty($categorias))
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Lista dos Tipos de Pagamentos </h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('categ.add') }}"> Adicionar Novo TOP</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                        <th width="40%">Descri&ccedil;&atilde;o</th>
                        <th width="15%">Estado</th>
                        <th width="20%">Opera&ccedil;&atilde;o</th>
                    </thead>
    
                    <!-- Table Body -->
                    <tbody>
                    @foreach($tops as $top)
                        <tr>
                            <td class="table-text">
                                <div>{{$top->description}}</div>
                            </td>
                                <td class="table-text">
                                <div>{{$top->state}}</div>
                            </td>
                            <td>
                                
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
@endsection