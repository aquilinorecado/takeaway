<!DOCTYPE html>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />
  
    <!-- Use the .htaccess and remove these lines to avoid edge case issues. More info: h5bp.com/b/378 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="title" content="Takeaway Localator">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Takeaway Locator e um website de divulga&ccedil;&atilde;o de Takeaway de Maputo." />
    <meta name="keywords" content="twitter bootstrap themes,bootstrap themes,bootstrap templates,twitter bootstrap templates,cleanstrap,flat,themes,flatui,buy themes,cheap,quality,design,templates" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TakeAway Locator</title>

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

    <!-- Styles -->

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-responsive.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

    
    <!-- Styles for google map -->
    <style>
    #mapa{
        width: 350px;
        height: 250px;
    }
    </style>
  
    
    <!--------------------- End Stytes for google map ---->
 

<body id="top" class="index" data-spy="scroll" data-target=".scrollnav" data-offset="95">    
    
     <div class="navbar navbar-fixed-top">
       <div class="navbar-inner">
         <div class="container">
           <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </a>
            <a class="brand" href="#">TakeAway Locator</a>
                <div class="nav-collapse">
                        @guest 
                          <ul class="nav pull-right">
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Cadastro</a></li>
                         `</ul>
                        @else
                          <ul class="nav pull-right">
                               <li class="dropdown" id="preview-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                                  <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:14px; left:10px; border-radius:50%">
                                  {{ Auth::user()->name }}  <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                  <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                  </li>

                                  <li><a href="{{ url('/profile') }}">Meu Perfil</a></li>
                                  
                                </ul>
                              </li>
                          </ul>

                        @endguest

                  <form class="navbar-form pull-right">
                    <input autocomplete="off" type="text" placeholder="Procurar TakeAway" name="top-search" id="top-search">
                    <button type="submit" class="btn">procurar</button>
                  </form>
                </div><!-- /.nav-collapse -->
         </div>
       </div>
     </div>

     <!-- Masthead ================================================== -->

    <header class="jumbotron" id="overview">
    <div class="container">
          <div class="subnav scrollnav">
            <ul class="nav nav-pills">
              @guest           

                  <li class="active"><a href="{{ route('home') }}">Home</a></li>
                  <li><a href="{{ route('takeaway.list') }}">TakeAway List</a></li> 
                  <li><a href="{{ route('team') }}">Sobre nos</a></li>
                @else
                  <li class="active"><a href="{{ route('home') }}">Home</a></li>
                  <li><a href="{{ route('takeaway.list') }}">TakeAway List</a></li> 
                  <li><a href="{{ route('takeaway.index') }}">TakeAway</a></li>
                  <li><a href="{{ route('product.index') }}">Produtos</a></li>
                  <li><a href="#">Lista de gestores</a></li>
                  <li><a href="{{ route('team') }}">Sobre nos</a></li>
                @endguest
            </ul>
          </div>
      </div>
    </header>

    <div class="container">

        @yield('content')
    
     <!-- Footer
      ================================================== -->
      

      </br><hr>

      <footer id="footer">
        <p class="pull-right"><a href="#top">Back to top</a></p>
      </footer>

    </div><!-- /container -->


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>
    <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>    
    <script src="{{ asset('js/jquery.smooth-scroll.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/retro.js') }}"></script>
    


    <script type="text/javascript">
      $('#user_id').select2({
        placeholder: 'Seleciona um Usuario'
      });
    </script>

    <script type="text/javascript">
      $('#take_away_id').select2({
        placeholder: 'Seleciona um TakeAway'
      });
    </script>

    
    <script type="text/javascript">
      $('#userlevel_id').select2({
        placeholder: 'Seleciona o seu Nivel'
      });
    </script>
</body>

