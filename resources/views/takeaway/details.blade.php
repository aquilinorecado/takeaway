@extends('layouts.app')


@section('content')

<section id="forms">

       
          <div class="page-header">
              
                  <h1>Editar Take Away </h1>
              
              <div>
                  <a href="{{ route('takeaway.index') }}" class="label label-primary">Voltar</a>
              </div>
          </div>
          <div class="row">
            <div class="span10 offset1">
                <form action="{{ route('takeaway.index') }}" enctype="multipart/form-data" method="POST" class="form-horizontal well">
                  <fieldset>
                    {{ csrf_field() }}
                    <div class="control-group">
                        <label class="control-label" >Nome do Take Away :</label>
                       <div class="controls">
                            <input readonly  value="{{ $takeaway->name }}" type="text" name="name" id="name" class="input-xlarge">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" > Logo :</label>
                       <div class="controls bs-docs-example bs-docs-example-image">
                            <img src="/uploads/avatars/{{$takeaway->logo}}" class="img-polaroid">                     
                        </div>
                    </div>

                     <div class="control-group">
                        <label class="control-label" >Hora de Inicio :</label>
                       <div class="controls">
                            <input readonly  type="time" value="{{ $takeaway->opening_time }}" name="opening_time" id="opening_time" class="input-xlarge">
                        </div>
                    </div>
                    
                     <div class="control-group">
                        <label class="control-label" >Hora de Fecho :</label>
                       <div class="controls">
                            <input readonly  type="time" value="{{ $takeaway->closing_time }}" name="closing_time" id="closing_time" class="input-xlarge">
                        </div>
                    </div>
                    
                     <div class="control-group">
                        <label class="control-label" >Website:</label>
                       <div class="controls">
                            <input readonly  type="text" value="{{ $takeaway->website }}" name="website" id="website" class="input-xlarge">
                        </div>
                    </div>
                    
                    
                     <div class="control-group">
                        <label class="control-label" >Celular :</label>
                       <div class="controls">
                            <input readonly  type="text" name="mobile" value="{{ $takeaway->mobile }}" id="contact" class="input-xlarge">
                        </div>
                    </div>
                    
                    
                    <div class="control-group">
                        <label class="control-label" >Telefone :</label>
                       <div class="controls">
                            <input readonly  type="text" name="phone" id="phone" value="{{ $takeaway->phone }}" class="input-xlarge">
                        </div>
                    </div>
                    
                    
                    <div class="control-group">
                        <label class="control-label" >Email :</label>
                       <div class="controls">
                            <input readonly  type="text" name="email" id="email" class="input-xlarge" value="{{ $takeaway->email }}">
                        </div>
                    </div>
                    
                     <div class="control-group">
                        <label class="control-label" >Avenida :</label>
                       <div class="controls">
                            <input readonly  type="text" value="{{ $takeaway->av }}" name="av" id="av" class="input-xlarge">
                        </div>
                    </div>
                    
                     <div class="control-group">
                        <label class="control-label" >Rua :</label>
                       <div class="controls">
                            <input readonly  type="text" name="road" id="road" value="{{ $takeaway->road }}" class="input-xlarge">
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" >Numero :</label>
                       <div class="controls">
                            <input readonly  type="text" name="number" id="number" value="{{ $takeaway->number }}" class="input-xlarge">
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" >Provincia :</label>
                       <div class="controls">
                            
                           <select name="province" id="province" >
                               
                                <option value="Maputo Cidade"
                                        
                                        <?php if( strcmp($takeaway->province ,"Maputo Cidade")==0)
                                                echo 'selected="selected"'
                                                ;
                                        ?>
                                        
                                >Maputo Cidade</option>
                                <option value="Maputo"
                                         <?php if( strcmp($takeaway->province ,"Maputo")==0)
                                                echo 'selected="selected"'
                                                ;
                                        ?>
                                        >Maputo</option>                            
                                <option value="Gaza"
                                        <?php if( strcmp($takeaway->province ,"Gaza")==0)
                                                echo 'selected="selected"'
                                                ;
                                        ?>
                                        >Gaza</option>
                                <option value="Inhambane"
                                         <?php if( strcmp($takeaway->province ,"Inhambane")==0)
                                                echo 'selected="selected"'
                                                ;
                                        ?>
                                        >Inhambane</option>
                                <option value="Sofala"
                                        <?php if( strcmp($takeaway->province ,"Sofala")==0)
                                                echo 'selected="selected"'
                                                ;
                                        ?>
                                        >Sofala</option>
                                <option value="Manica"
                                         <?php if( strcmp($takeaway->province ,"Manica")==0)
                                                echo 'selected="selected"'
                                                ;
                                        ?>
                                        >Manica</option>
                                <option value="Tete"
                                        <?php if( strcmp($takeaway->province ,"Tete")==0)
                                                echo 'selected="selected"'
                                                ;
                                        ?>
                                        >Tete</option>
                                <option value="Quelimane"
                                         <?php if( strcmp($takeaway->province ,"Quelimane")==0)
                                                echo 'selected="selected"'
                                                ;
                                        ?>
                                        >Quelimane</option>
                                <option value="Nampula"
                                         <?php if( strcmp($takeaway->province ,"Nampula")==0)
                                                echo 'selected="selected"'
                                                ;
                                        ?>
                                        >Nampula</option>
                                <option value="Niassa"
                                         <?php if( strcmp($takeaway->province ,"Niassa")==0)
                                                echo 'selected="selected"'
                                                ;
                                        ?>
                                        >Niassa</option>
                                <option value="Cabo Delgado"
                                         <?php if( strcmp($takeaway->province ,"Cabo Delgado")==0)
                                                echo 'selected="selected"'
                                                ;
                                        ?>
                                        >Cabo Delgado</option>
                                
                            </select>
                        </div>
                    </div>
                 
                
                    
   
                    <div class="form-actions">
                          <a href="{{ route('takeaway.index') }}" class="label label-primary">Voltar</a>
                          
                    </div>
                  </fieldset>
                </form>
            </div>
          </div>
        

</section>

@endsection

