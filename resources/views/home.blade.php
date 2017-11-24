@extends('layouts.app')

@section('content')

<section id="typography">
  <div class="bs-docs-example">
    <div class="hero-unit">
      <h1>Bem Vindo!</h1>
      <p>O TakeAway Locator &eacute; um website disponivel para publicitar produtos e servi&ccedil;os disponiveis em todos os TakeAways da provincia e cidade de Maputo.</p>
      <p><a class="btn btn-primary btn-large" href="{{ route('takeaway.index') }}">Cadastre j&aacute; o seu TakeAway</a></p>
    </div>
  </div>

  <div id="mymap"></div>


  <script type="text/javascript">
    var locations = <?php print_r(json_encode($locations)) ?>;
    var mymap = new GMaps({
      el: '#mymap',
      lat: -25.95398248591323,
      lng: 32.588622592651404,
      zoom:13
    });


    $.each( locations, function( index, value ){

	    mymap.addMarker({
	      lat: value.lat,
	      lng: value.lng,
	      title: value.name,
	      click: function(e) {
	      	alert('TakeAway '+value.name+', Maputo, Mocambique.');
	      }
	    });
   });
  </script>



</section>
	

@endsection
