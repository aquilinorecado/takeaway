@extends('layouts.app')

@section('content')
<section id="tables">
                <div class="conteiner">
                    @if(Session::has('success_msg'))
                    <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
                    @endif
                <!-- Posts list -->
                @if(!empty($takeaways))
                    <div class="page-header">
                            <div >
                                <h1>Lista dos Take Aways</h1>
                            </div>
                            <div >
                                <a class="btn btn-success" href="{{ route('takeaway.add') }}"> Adicionar Novo Take Away</a>
                            </div>
                    </div>
                         <table class="table table-bordered table-striped table-hover">
                                <!-- Table Headings -->
                                <thead>
                                    <th width="10%">Codigo</th>
                                    <th width="55%">Nome</th>
                                    <th width="15%">Avenida</th>
                                  <th width="20%">Opera&ccedil;&atilde;o</th>
                                </thead>
                
                                <!-- Table Body -->
                                <tbody>
                                @foreach($takeaways as $takeaway)
                                    <tr>
                                        <td >
                                            <div>{{$takeaway->id}}</div>
                                        </td>
                                        <td >
                                            <div>{{$takeaway->name}}</div>
                                        </td>
                                        <td >
                                            <div>{{(Address::find($takeaway->address_id))->av}}</div>
                                        </td>
                                        <td>
                                            
                                            <a href="{{ route('takeaway.details', $takeaway->id) }}">
                                              <i class="icon-eye-open"></i>
                                            </a>

                                            <a href="{{ route('takeaway.edit', $takeaway->id) }}">
                                              <i class="icon-pencil"></i>
                                            </a>

                                            <a href="{{ route('takeaway.delete', $takeaway->id) }}" onclick="return confirm('Tens a certeza que pretende remover?')">
                                                <i class="icon-trash"></i>
                                            </a>
                                            
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                @endif
                </div>           
</section>
@endsection