<div id="wrapper">
  @include('users.cambio_password_modal')
  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar"
    style="background-color: #343a40!important;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/home') }}">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-shoe-prints"></i>
      </div>
      <div class="sidebar-brand-text mx-3">HUELLAS DEL FUTURO</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <hr class="sidebar-divider">
     <!-- Heading -->
     <div class="sidebar-heading">
      Pagina Principal
    </div>
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ url('/tablero') }}">
        <i class="fas fa-home"></i>
        <span>HOME</span>
      </a>
    </li>
    <hr class="sidebar-divider">
    <!-- ADMINISTRACION --------------->

    <!-- Heading -->
    <div class="sidebar-heading">
      Interface Administrativa
    </div>
    @if (Auth::user()->rol_id == 1 || Auth::user()->rol_id == 2 || Auth::user()->rol_id == 3 || Auth::user()->rol_id == 4)
    <!-- User del sistemas-->
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ url('/users') }}">
        <i class="fas fa-user-alt"></i>
        <span>User</span>
      </a>
    </li>
    @endif

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ url('/usuarios') }}">
        <i class="far fa-address-book"></i>
        <span>Usuarios</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ url('/organigramas') }}">
        <i class="fas fa-sitemap"></i>
        <span>Organigrama</span>
      </a>
    </li>
    <!-- Nav Item - Utilities Collapse Menu -->
    {{-- <li class="nav-item">
      <a class="nav-link collapsed" href="{{ url('/clientes') }}">
    <i class="fas fa-user-circle"></i>
    <span>Asociados</span>
    </a>
    </li> --}}
    <!-- ************* FIN ADMINISTRACION ************* -->

    <!-- ************* DOCUMENTACION************* -->
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Documentación
    </div>

    <!-- ************* LAVADAS ************* -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ url('/documentaciones') }}">
        <i class="fas fa-file-contract"></i>
        <span>Documentacion</span></a>
    </li>

    <!-- ************* CONFIGURACION DE LAVADAS ************* -->
    {{-- <li class="nav-item">
      <a class="nav-link collapsed" href="{{ url('/tipo_lavada') }}">
    <i class="fas fa-water"></i>
    <span>Tipo Lavadas</span>
    </a>
    </li> --}}

    <!-- ************* INICIO CONFIGURACION************* -->
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Configuración
    </div>
    @if (Auth::user()->rol_id == 1 || Auth::user()->rol_id == 2 || Auth::user()->rol_id == 3 || Auth::user()->rol_id == 4)
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/roles') }}">
        <i class="fas fa-user-secret"></i>
        <span>Roles</span></a>
    </li>

    <!-- GENEREA LAS LIQUIDACIONES LOS EMPLEADOS -->
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/tipos_documentos') }}">
        <i class="far fa-id-card"></i>
        <span>Tipos de Documentos</span></a>
    </li>
    @endif
    <!-- GENEREA TODOS LOS REPORTES DE LA LAVADAS POR FECHA -->

    {{-- <li class="nav-item">
      <a class="nav-link" href="tables.html">
        <i class="fas fa-fw fa-table"></i>
        <span>Caja</span></a>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
<div id="content">

  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars"></i>
    </button>

      <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->Usuario->primer_nombre.' '.Auth::user()->Usuario->primer_apellido.' - '.Auth::user()->Usuario->rol->nombre }}</span>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

          <!-- Nav Item - Search Dropdown (Visible Only XS) -->
          
          {{-- <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-search fa-fw"></i>
            </a>
          </li> --}}

          <div class="topbar-divider d-none d-sm-block"></div>
          <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalCambiopassword">
                <i class="fas fa-user"></i>
                Cambiar Contraseña
              </a>
            </nav>
          </div>
          <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                <i class="fas fa-door-open"></i>
                Cerrar Sesion
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </nav>
          </div>
         
          {{-- <li class="nav-item">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} 
            </a>
           
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalCambiopassword">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Cambiar Contraseña
              </a>
              <div class="dropdown-divider"></div> 
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Cerrar Sesion
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </div>
          </li> --}}

        </ul>

      </nav>