<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
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

</head>
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
                  
                 
                  @if (Route::has('login'))

                      @auth

                      @else
                          <ul class="nav pull-right">
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Cadastro</a></li>
                         `</ul>
                      @endauth
                  @endif

                  <form class="navbar-search pull-right" action="">
                    <input type="text" class="search-query span2" placeholder="Procurar">
                  </form>
                </div><!-- /.nav-collapse -->
         </div>
       </div>
     </div>

     <!-- Masthead ================================================== -->

    <header class="jumbotron" id="overview">

    </br>

    <div class="container">
          <div class="subnav scrollnav">
            <ul class="nav nav-pills">
                <li class="active"><a href="#">Home</a></li>                
                <li><a href="#">Categorias</a></li>
                <li><a href="#">Subcategorias</a></li>
                <li><a href="{{ route('top.index')}}">Tipos de Pagamentos</a></li>
                <li><a href="{{ route('address.index')}}">Endere&ccedil;os</a></li>
                <li><a href="#">Lista de gestores</a></li>
                <li><a href="#">Sobre nos</a></li>
            </ul>
          </div>
      </div>
    </header>

    <div class="container">
        <br>

        @yield('content')
    

     <!-- Footer
      ================================================== -->
      <hr>

      <footer id="footer">
        <p class="pull-right"><a href="#top">Back to top</a></p>
      </footer>

    </div><!-- /container -->



    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="{{ asset('js/jquery.smooth-scroll.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/retro.js') }}"></script>
</body>
</html>
