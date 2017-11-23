@extends('layouts.app')


@section('content')

<section id="forms">

        @if($errors->any())
            <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach()
            </div>
        @endif
          <div class="page-header">
              
                  <h1>Adicionar Novo Take Away </h1>
              
              <div>
                  <a href="{{ route('takeaway.index') }}" class="label label-primary">Voltar</a>
              </div>
          </div>
          <div class="row">
            <div class="span10 offset1">
                <form action="{{ route('takeaway.insert') }}" enctype="multipart/form-data" method="POST" class="form-horizontal well">
                  <fieldset>
                    {{ csrf_field() }}
                    <div class="control-group">
                        <label class="control-label" >Nome do Take Away :</label>
                       <div class="controls">
                            <input type="text" value="{{ old('name') }}" name="name" id="name" class="input-xlarge">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" > Logo :</label>
                       <div class="controls">
                            <input type="file" name="avatar" id="avatar" value="{{ old('avatar') }}"/>
                            @if ($errors->has('avatar'))
                                <span class="alert alert-danger">
                                    <strong>{{ $errors->first('avatar') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                     <div class="control-group">
                        <label class="control-label" >Hora de Inicio :</label>
                       <div class="controls">
                            <input type="time" value="{{ old('opening_time') }}" name="opening_time" id="opening_time" class="input-xlarge">
                        </div>
                    </div>
                    
                     <div class="control-group">
                        <label class="control-label" >Hora de Fecho :</label>
                       <div class="controls">
                            <input type="time" value="{{ old('closing_time') }}" name="closing_time" id="closing_time" class="input-xlarge">
                        </div>
                    </div>
                    
                     <div class="control-group">
                        <label class="control-label" >Website:</label>
                       <div class="controls">
                            <input type="text" value="{{ old('website') }}" name="website" id="website" class="input-xlarge">
                        </div>
                    </div>
                    
                    
                     <div class="control-group">
                        <label class="control-label" >Celular :</label>
                       <div class="controls">
                            <input type="text" name="mobile" value="{{ old('mobile') }}" id="contact" class="input-xlarge">
                        </div>
                    </div>
                    
                    
                    <div class="control-group">
                        <label class="control-label" >Telefone :</label>
                       <div class="controls">
                            <input type="text" name="phone" id="phone" value="{{ old('phone') }}" class="input-xlarge">
                        </div>
                    </div>
                    
                    
                    <div class="control-group">
                        <label class="control-label" >Email :</label>
                       <div class="controls">
                            <input type="text" name="email" id="email" class="input-xlarge" value="{{ old('email') }}">
                        </div>
                    </div>
                    
                     <div class="control-group">
                        <label class="control-label" >Avenida :</label>
                       <div class="controls">
                            <input type="text" value="{{ old('av') }}" name="av" id="av" class="input-xlarge">
                        </div>
                    </div>
                    
                     <div class="control-group">
                        <label class="control-label" >Rua :</label>
                       <div class="controls">
                            <input type="text" name="road" id="road" value="{{ old('road') }}" class="input-xlarge">
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" >Numero :</label>
                       <div class="controls">
                            <input type="text" name="number" id="number" value="{{ old('number') }}" class="input-xlarge">
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" >Provincia :</label>
                       <div class="controls">
                            <select name="province" id="province">
                                <option value="Maputo Cidade">Maputo Cidade</option>
                                <option value="Maputo">Maputo</option>                            
                                <option value="Gaza">Gaza</option>
                                <option value="Inhambane">Inhambane</option>
                                <option value="Sofala">Sofala</option>
                                <option value="Manica">Manica</option>
                                <option value="Tete">Tete</option>
                                <option value="Quelimane">Quelimane</option>
                                <option value="Nampula">Nampula</option>
                                <option value="Niassa">Niassa</option>
                                <option value="Cabo Delgado">Cabo Delgado</option>
                                
                            </select>
                        </div>
                    </div>
                    
                    <div class="control-group">				
              				<input id="searchmap" type="text"  placeholder="Search Box">
              				<div id="mapa"></div>
            		    </div>
                    
                    <div class="control-group">
                        <label class="control-label" >Latitude :</label>
                       <div class="controls">
                            <input type="text" value="{{ old('lat') }}" name="lat" id="lat" class="input-xlarge">
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" >Longetude :</label>
                       <div class="controls">
                            <input type="text" name="lng" id="lng" class="input-xlarge" value="{{ old('lng') }}">
                        </div>
                    </div>
                    
                <!--    <div class="control-group">
                        <label class="control-label" >Categoria :</label>
                       <div class="controls">
                            Category ID 
                            <select name="id" id="id">
                               php
                               use App\Categories;
                                    $categories= Categories::orderBy('created_at','desc')->get();

                                    foreach($categories as $categorie) 
                                    {				
                                            echo "<option value='". $categorie->id ."'>". $categorie->description ."</option>";
                                    } 
                              ?> 
                                
                            </select>
                        </div>
                    </div>
                     -->
                    <div class="form-actions">
                          <input type="submit" class="btn btn-default" value="Salvar" />
                          <button type="reset" class="btn">Cancel</button>
                    </div>
                  </fieldset>
                </form>
            </div>
          </div>
        <script>
    
            var map;
              function initMap() {
                  map = new google.maps.Map(document.getElementById('mapa'),{
                center:{lat: -25.913073,lng: 32.580812},
                zoom:10
            } );

             var marker = new google.maps.Marker({
                position: {lat: -25.913073,lng: 32.580812},
                map: map,
                draggable: true
            });

            var input = document.getElementById('searchmap');
            var searchBox = new google.maps.places.SearchBox(input);
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

            map.addListener('bounds_changed', function() {
                  searchBox.setBounds(map.getBounds());
                });

            var markers = [];

            searchBox.addListener('places_changed', function() {
                  var places = searchBox.getPlaces();

                  if (places.length == 0) {
                    return;
                  }

                  // Clear out the old markers.
                  markers.forEach(function(marker) {
                    marker.setMap(null);
                  });
                  markers = [];

                  // For each place, get the icon, name and location.
                  var bounds = new google.maps.LatLngBounds();
                  places.forEach(function(place) {
                    if (!place.geometry) {
                      console.log("Returned place contains no geometry");
                      return;
                    }
                    var icon = {
                      url: place.icon,
                      size: new google.maps.Size(71, 71),
                      origin: new google.maps.Point(0, 0),
                      anchor: new google.maps.Point(17, 34),
                      scaledSize: new google.maps.Size(25, 25)
                    };

                    // Create a marker for each place.
                    marker =new google.maps.Marker({
                      map: map,
                      icon: icon,
                      title: place.name,
                      position: place.geometry.location,
                      draggable: true
                    });
                     google.maps.event.addListener(marker,'position_changed',function(){
                      var lat=marker.getPosition().lat();
                      var lng=marker.getPosition().lng();
                      $('#lat').val(lat);
                      $('#lng').val(lng);
                    });

                    markers.push(marker);

                    if (place.geometry.viewport) {
                      // Only geocodes have viewport.
                      bounds.union(place.geometry.viewport);
                    } else {
                      bounds.extend(place.geometry.location);
                    }
                  });
                  map.fitBounds(bounds);

                });



            google.maps.event.addListener(marker,'position_changed',function(){
                var lat=marker.getPosition().lat();
                var lng=marker.getPosition().lng();
                $('#lat').val(lat);
                $('#lng').val(lng);
                });
            }         
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtng5Ove_4jDibP7QGNHOXze482V8_Yjg&callback=initMap&libraries=places" async defer></script>
</section>

@endsection

