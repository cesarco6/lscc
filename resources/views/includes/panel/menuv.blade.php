<!-- Navigation -->
<h6 class="navbar-heading text-muted">Gestionar informacion</h6>
<ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="{{route('admin.prospects.dashboard')}}">
        <i class="ni ni-tv-2 text-primary"></i> Dashboard
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('admin.prospects.create')}}">
        <i class="ni ni-planet text-blue"></i> Creacion de Prospecto (uno)
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('admin.prospects.import')}}">
        <i class="ni ni-pin-3 text-orange"></i> Inserta un archivo con prospectos
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('admin.prospects.regmat')}}">
        <i class="ni ni-single-02 text-yellow"></i> Busca incidencia de prospectos
      </a>
    </li>    
    <li class="nav-item">
      <a class="nav-link" href="{{route('login')}}">
        <i class="ni ni-key-25 text-info"></i> Login
      </a>
    </li>
    <!--
    <li class="nav-item">
      <a class="nav-link" href="./examples/register.html">
        <i class="ni ni-circle-08 text-pink"></i> Register
      </a>
    </li>
    -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('logout')}}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <i class="ni ni-bullet-list-67 text-red"></i> Salir
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      </li>
  </ul>
  <!-- Divider -->
  <hr class="my-3">
  <!-- Heading -->
  <h6 class="navbar-heading text-muted">Reportes</h6>
  <!-- Navigation -->
  <ul class="navbar-nav mb-md-3">
    <li class="nav-item">
      <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html">
        <i class="ni ni-spaceship"></i> Frecuancia de seguimiento
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">
        <i class="ni ni-palette"></i> Vendedores más activos
      </a>
    </li>   
  </ul>
