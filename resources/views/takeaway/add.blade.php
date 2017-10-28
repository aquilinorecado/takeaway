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
                <form action="{{ route('takeaway.insert') }}" method="POST" class="form-horizontal well">
                  <fieldset>
                    {{ csrf_field() }}
                    <div class="control-group">
                        <label class="control-label" >Nome do Take Away :</label>
                       <div class="controls">
                            <input type="text" name="name" id="name" class="input-xlarge">
                        </div>
                    </div>
                    
                     <div class="control-group">
                        <label class="control-label" >Hora de Inicio :</label>
                       <div class="controls">
                            <input type="time" name="opening_time" id="opening_time" class="input-xlarge">
                        </div>
                    </div>
                    
                     <div class="control-group">
                        <label class="control-label" >Hora de Fecho :</label>
                       <div class="controls">
                            <input type="time" name="closing_time" id="closing_time" class="input-xlarge">
                        </div>
                    </div>
                    
                     <div class="control-group">
                        <label class="control-label" >Website:</label>
                       <div class="controls">
                            <input type="text" name="website" id="website" class="input-xlarge">
                        </div>
                    </div>
                    
                    
                     <div class="control-group">
                        <label class="control-label" >Contacto :</label>
                       <div class="controls">
                            <input type="text" name="contact" id="contact" class="input-xlarge">
                        </div>
                    </div>
                    
                    
                    <div class="control-group">
                        <label class="control-label" >Telefone :</label>
                       <div class="controls">
                            <input type="text" name="phone" id="phone" class="input-xlarge">
                        </div>
                    </div>
                    
                    
                    <div class="control-group">
                        <label class="control-label" >Email :</label>
                       <div class="controls">
                            <input type="text" name="email" id="email" class="input-xlarge">
                        </div>
                    </div>
                    
                     <div class="control-group">
                        <label class="control-label" >Avenida :</label>
                       <div class="controls">
                            <input type="text" name="av" id="av" class="input-xlarge">
                        </div>
                    </div>
                    
                     <div class="control-group">
                        <label class="control-label" >Rua :</label>
                       <div class="controls">
                            <input type="text" name="road" id="road" class="input-xlarge">
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" >Numero :</label>
                       <div class="controls">
                            <input type="text" name="number" id="number" class="input-xlarge">
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
                        <label class="control-label" >Categoria :</label>
                       <div class="controls">
                           <!-- Category ID -->
                            <select name="id" id="id">
                               <?php
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
                    
                    <div class="form-actions">
                          <input type="submit" class="btn btn-default" value="Salvar" />
                          <button type="reset" class="btn">Cancel</button>
                    </div>
                  </fieldset>
                </form>
            </div>
          </div>
</section>
@endsection