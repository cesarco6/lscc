<div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
    <div class=" dropdown-header noti-title">
      <h6 class="text-overflow m-0">¡Bienvenido!</h6>
    </div>
    <a href="./examples/profile.html" class="dropdown-item">
      <i class="ni ni-single-02"></i>
      <span>Mi perfil</span>
    </a>
    <a href="./examples/profile.html" class="dropdown-item">
      <i class="ni ni-settings-gear-65"></i>
      <span>Configuración</span>
    </a>
    <a href="./examples/profile.html" class="dropdown-item">
      <i class="ni ni-calendar-grid-58"></i>
      <span>Mis Prospectos</span>
    </a>            
    <div class="dropdown-divider"></div>
    <a href="{{ route('logout') }}" class="dropdown-item"
      onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
      @csrf

    </form>
      <i class="ni ni-user-run"></i>
      <span>Salir</span>
    </a>
  </div>