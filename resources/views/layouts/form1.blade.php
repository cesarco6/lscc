<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Control de Clientes') }}</title>
  <!-- Favicon -->
  <link href="{{asset('imags/favicon.png')}}" rel="icon" type="image/png">
  
  <!-- Icons -->
  <link href="{{asset('assets/vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
  
  <!-- Argon CSS -->
  
  <link type="text/css" href="{{asset('assets/css/argon.css?v=1.0.0')}}" rel="stylesheet">
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
</head>

<body class="bg-default">
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-4">
        <a class="navbar-brand" href="{{ url('/home') }}">
          <img src="{{asset('imags/lo3tra.png')}}"/>
      </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
          <!-- Collapse header -->
          <div class="navbar-collapse-header d-md-none">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="../index.html">
                  <img src="{{asset('assets/img/brand/blue.png')}}">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <!-- Navbar items -->
          <ul class="navbar-nav ml-auto">
            @guest
            <!--
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ route('register') }}">
                      <i class="ni ni-circle-08"></i>
                      <span class="nav-link-inner--text">Registro</span>
                    </a>
                </li>
            @endif
              -->
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ route('login') }}">
                      <i class="ni ni-key-25"></i>
                      <span class="nav-link-inner--text">Ingresar</span>
                    </a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest                      
          </ul>
        </div>
      </div>
    </nav>
    
    
   
  </div>
  <!-- Footer -->
 
  <!-- Argon Scripts -->
  <!-- Core -->
  <!-- Argon JS -->
  <script src="{{asset('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/argon.js?v=1.0.0')}}"></script>
</body>

</html>