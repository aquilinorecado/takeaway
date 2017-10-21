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
            @if(!empty($addresses))
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Lista dos Endere&ccedil;os </h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-success" href="{{ route('address.add') }}"> Adicionar Novo Endere&ccedil;o</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <table class="table table-striped task-table">
                            <!-- Table Headings -->
                            <thead>
                                <th width="5%">Cod.</th>
                                <th width="20%">Rua</th>
                                <th width="20%">Avenida</th>
                                <th width="20%">Provincia</th>
                                <th width="10%">Bloco</th>
                                <th width="5%">Num.</th>
                                <th width="20%">Destalhes</th>
                            </thead>
            
                            <!-- Table Body -->
                            <tbody>
                            @foreach($addresses as $address)
                                <tr>
                                    <td class="table-text">
                                        <div>{{$address->id}}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{$address->road}}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{$address->av}}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{$address->province}}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{$address->block}}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{$address->number}}</div>
                                    </td>
                                    <td>
                                        
                                        <a href="{{ route('address.details', $address->id) }}">
                                          <span class="glyphicon glyphicon-eye-open"></span>
                                        </a>

                                        <a href="{{ route('address.edit', $address->id) }}">
                                          <span class="glyphicon glyphicon-edit"></span>
                                        </a>

                                        <a href="{{ route('address.delete', $address->id) }}" onclick="return confirm('Tens a certeza que pretende remover?')">
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