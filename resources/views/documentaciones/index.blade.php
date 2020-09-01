@extends('layouts.app_tablero') 
@section('main-content')

<div class="content-header"> 
    <center>  
        <h4 style="
        font-family: auto;
        font-weight: bold;
    ">DOCUMENTACIÓN DE LA FUNDACIÓN HUELLAS DEL FUTURO</h4>
    </center> 
</div>
<br>


{{-- {{ $documentos }} --}}
<nav class="navbar navbar-default navbar-static-top" style="height: 100px;">
       
    <!-- Branding Image -->
    <div class="container-fluid" style="display: flex;"> 
       <a class="btn purple-gradient" style="
       width: 180px; 
        font-size: 20px;
        font-family: cursive;
    " href="{{ url('/actas')}}" type="buton"><i class="far fa-folder"></i> ACTAS</a> 

    <a class="btn blue-gradient" style="
    width: 250px; 
     font-size: 20px;
     font-family: cursive;
    " href="{{ url('/archivos')}}" type="buton"><i class="far fa-folder"></i> DOCUMENTOS</a>
    <a class="btn aqua-gradient" style="
    width: 250px; 
     font-size: 20px;
     font-family: cursive;
    " href="{{ url('/formularios')}}" type="buton"><i class="far fa-folder"></i> FOMULARIOS</a>
    <a class="btn peach-gradient" style="
    width: 300px; 
     font-size: 20px;
     font-family: cursive;
    " href="{{ url('/modelos')}}" type="buton"><i class="far fa-folder"></i> MODELOS Y GUIAS</a>
    </div>
</nav>  

@endsection