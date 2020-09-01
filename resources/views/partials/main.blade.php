<div id="app">
<nav class="navbar navbar-default navbar-static-top" style="background-color: #6351ce; display: list-item;">
        {{-- <div class="container"> --}}
<!-- Right Side Of Navbar -->
    <ul class="nav navbar-nav navbar-right" style="display: block;text-size-adjust: auto;">
    <!-- Authentication Links -->
    @if (Auth::guest())
    <li><a  href="{{ url('/login')}}"="font-size: 18px;font-family: cursive;text-align: center;color: black;"><p class="font-weight-bold font-weight-light text-center text-justify">Login</p></a></li>
    {{-- <li><a href="{{ route('register') }}" style="font-size: 18px;font-family: cursive;text-align: center;color: black;"><p class="text-primary font-weight-bold font-weight-light text-center text-justify">Registrarse</p></a></li> --}}
    @else
    {{-- <li class="dropdown"> --}}
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="{{ url('/tablero') }}" style="
                    font-family: cursive;
                    color: black;">
                        Home
                    </a>  
                </div>
                <div class="col">

                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" style="
                    font-family: cursive;
                    color: black;">
                        Logout
                    </a>
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                        style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>

        </div>
        {{-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
            aria-expanded="false" style="
            font-family: cursive;
            color: black;
        ">
            {{ Auth::user()->name }} <span class="caret"></span>
        </a> --}}

        <ul class="dropdown-menu" role="menu">
            {{-- <li> --}}
                {{-- <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                    style="display: none;">
                    {{ csrf_field() }}
                </form> --}}
            {{-- </li>  --}}
        </ul>
    {{-- </li> --}}
    @endif
</ul>
 
        {{-- </div> --}}
        <h2><p class="font-weight-bold font-weight-light text-center text-justify font-family: cursive;">HUELLAS DEL FUTURO FUNDACION</p></h2> 
        <h5><p class="font-weight-bold font-weight-light text-center text-justify"><i class="fas fa-envelope"></i>-huellasdelfuturofundacion@gmail.com</p></h5>
        <h5><p class="font-weight-bold font-weight-light text-center text-justify"><i class="fas fa-mobile-alt"></i>+57 3122705820</p></h5>
        
        {{-- <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'fundacion') }}</a> --}}
</nav>
    <nav class="navbar navbar-default navbar-static-top" style="height: 100px;">
       
            <!-- Branding Image -->
            <div class="container-fluid" style="display: flex;"> 
                <a href="{{ url('/')}}"> 
                    <img src="{{ asset('img/logo1.png') }}" alt="Huellas del Futuro Fundacion" class="img-fluid" style="width: 120px;">
                </a> 
                <a href="{{ url('/quien')}}" class="btn btn-outline-primary btn-lg" 
                style="width: 150px; height: 40px; font-size: 13px; font-weight: bold;"
                >QUIEN SOMOS</a>
                <a href="{{ url('/que')}}" class="btn btn-outline-secondary btn-lg" 
                style="width: 180px; height: 40px; font-size: 13px; font-weight: bold;"
                >NUESTROS FINES</a>
                <a href="{{ url('/donacion')}}" class="btn btn-outline-success btn-lg" 
                style="width: 150px; height: 40px; font-size: 13px; font-weight: bold;"
                >DONACIONES</a>
                <a href="#" class="btn btn-outline-warning btn-lg" 
                style="width: 150px; height: 40px; font-size: 13px; font-weight: bold;"
                >PROGRAMAS</a> 
                <a href="{{ url('/asociados')}}" class="btn btn-outline-secondary btn-lg" 
                style="width: 200px; height: 40px; font-size: 13px; font-weight: bold;"
                >NUEVOS ASOCIADOS</a> 
            </div>
        </nav>  

        
    @yield('content')
</div>