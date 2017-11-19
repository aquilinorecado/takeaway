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
            @if(!empty($users))
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Lista dos usuarios </h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-success" href="{{ route('user.add') }}"> Adicionar Novo usuario</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <table class="table table-striped task-table">
                            <!-- Table Headings -->
                            <thead>
                                <th width="5%">usuario</th>
                                <th width="20%">Password</th>
                               
                            </thead>
            
                            <!-- Table Body -->
                            <tbody>
                            @foreach($addresses as $address)
                                <tr>
                                    <td class="table-text">
                                        <div>{{$user->id}}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{$user->road}}</div>
                                    </td>
                                    
                                    <td>
                                        
                                        <a href="{{ route('user.details', $user->id) }}">
                                          <span class="glyphicon glyphicon-eye-open"></span>
                                        </a>

                                        <a href="{{ route('address.edit', $user->id) }}">
                                          <span class="glyphicon glyphicon-edit"></span>
                                        </a>

                                        <a href="{{ route('user.delete', $user->id) }}" onclick="return confirm('Tens a certeza que pretende remover?')">
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