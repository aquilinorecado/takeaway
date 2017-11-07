@extends('layouts.app')

@section('content')
<section id="tables">
                <div class="conteiner">
                    @if(Session::has('success_msg'))
                    <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
                    @endif
                <!-- Posts list -->
                @if(!empty($products))
                    <div class="page-header">
                            <div >
                                <h1>Lista dos Produtos </h1>
                            </div>
                            <div >
                                <a class="btn btn-success" href="{{ route('product.add') }}"> Adicionar Novo Produtos</a>
                            </div>
                    </div>
                         <table class="table table-bordered table-striped table-hover">
                                <!-- Table Headings -->
                                <thead>
                                    <th width="10%">Codigo</th>
                                    <th width="35%">Nome</th>
                                    <th width="10%">Pre&ccedil;o</th>
                                    <th width="25%">Detalhes</th>
                                    <th width="20%">Opera&ccedil;&atilde;o</th>
                                </thead>
                
                                <!-- Table Body -->
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td >
                                            <div>{{$product->id}}</div>
                                        </td>
                                        <td >
                                            <div>{{$product->name}}</div>
                                        </td>
                                        <td >
                                            <div>{{$product->price}}</div>
                                        </td>
                                        <td >
                                            <div>{{$product->details}}</div>
                                        </td>
                                        <td>
                                            
                                            <a href="{{ route('top.details', $top->id) }}">
                                              <i class="icon-eye-open"></i>
                                            </a>

                                            <a href="{{ route('top.edit', $top->id) }}">
                                              <i class="icon-pencil"></i>
                                            </a>

                                            <a href="{{ route('top.delete', $top->id) }}" onclick="return confirm('Tens a certeza que pretende remover?')">
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