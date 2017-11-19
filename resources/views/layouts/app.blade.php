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
<<<<<<< HEAD
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
=======
    
    
    <!-- Styles for google map -->
    <style>
    #mapa{
        width: 350px;
        height: 250px;
    }
    </style>
  
    
    <!--------------------- End Stytes for google map ---->
    
    
   
    
    
>>>>>>> 9ae6a3b6120a1a2449a42a990b3e2395bd49684e

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
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Auth::user()->name }}  <b class="caret"></b></a>
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

                                  <li><a target="_blank" href="#">Meu Perfil</a></li>
                                  
                                </ul>
                              </li>
                          </ul>

                        @endguest

                  <form class="bs-docs-example navbar-search pull-right " action="">
                    <input type="text" class="input-medium search-query" placeholder="Procurar">
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
                <li class="active"><a href="{{ route('home') }}">Home</a></li>       
                <li><a href="#">Categorias</a></li>
                <li><a href="#">Subcategorias</a></li>
                <li><a href="{{ route('top.index') }}">Tipos de Pagamentos</a></li>
                <li><a href="{{ route('product.index') }}">Produtos</a></li>
                <li><a href="#">Lista de gestores</a></li>
                <li><a href="#">Sobre nos</a></li>
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



<<<<<<< HEAD
    

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
=======
   
>>>>>>> 9ae6a3b6120a1a2449a42a990b3e2395bd49684e
    <script src="{{ asset('js/jquery.smooth-scroll.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/retro.js') }}"></script>
    
<<<<<<< HEAD

    <script type="text/javascript">
      $('#user_id').select2({
        placeholder: 'Seleciona um Usuario'
      });
    </script>

    <script type="text/javascript">
      $('#takeaway_id').select2({
        placeholder: 'Seleciona um TakeAway'
      });
    </script>


=======
     <!-- scripts for google Map Stelio Tonica 19/11/2017-->
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    
    
    <!----- END script for google map-->
    
    
>>>>>>> 9ae6a3b6120a1a2449a42a990b3e2395bd49684e
</body>

