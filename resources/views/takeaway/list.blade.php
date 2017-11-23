@extends('layouts.app')

@section('content')

@if(!empty($takeaways))
	<section id="media">

    <div class="page-header">
      <h1>{{count($takeaways)}} - TakeAways disponiveis na nossa provincia. </h1>
    </div>


    @foreach($takeaways as $takeaway)
  		<ul class="media-list">			
              <li class="media">
                <a class="pull-left" href="#">
                  <img class="media-object" src="/uploads/avatars/{{$takeaway->avatar}}">
                  
                </a>
                <div class="media-body">
                  <h4 class="media-heading">{{$takeaway->name}}</h4>
                  <p><b>Aberto no periodo compriendido entre: </b>{{$takeaway->opening_time}} as {{$takeaway->closing_time}}.</p>
                  <p>Nossos contactos: <b>Fixo</b>: {{$takeaway->mobile}}, <b>Movel:</b> {{$takeaway->phone}}, <b>E-mail:</b> {{$takeaway->email}}.</p>
                  <p><b>Com o endereco site:</b> {{$takeaway->road}}, {{$takeaway->number}}, {{$takeaway->province}}.</p>
                  <p>Mais detalhes: {{$takeaway->details}}.</p>
                  <p><b>Website</b>: <i>{{$takeaway->website}}</i></p>
                  <!-- Nested media object -->
                  @foreach($takeaway->products as $product)
                    <div class="media">
                      <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64">
                      </a>
                      <div class="media-body">
                        <h4 class="media-heading">{{$product->name}}</h4>
                        <p>{{$product->details}}</p>
                        <p> 
                          <div>
                            <strong>Tag:</strong>
                              <label class="label label-info">{{ $product->tags  }}</label>
                          </div>
                        </p>
                      </div>
                    </div>
                  @endforeach
  		</ul>
    @endforeach
	</section>
  @endif

@endsection