@extends('layouts.app') 
@section('main-content')
<div>
    <center>
        <h1>PROGRAMA DE DONACIÓN</h1> 
    </center>

    <div class="panel-body">
        <blockquote class="blockquote bq-success">  
            <p 
            style="
            font-size: 18px;
            text-align: justify;
            font-family: cursive;
        ">El programa de donaciones busca obtener un impacto postitivo en la sociedad,
          canalizando los recursos gobernamentales, no-gobernamentales y entes internacionales para cubri las necesidades
          de la region, para el apoyo y alianzas a gurpos y organizaciones que tiene una 
          responsabilidad social en la region.
            </p>
          </blockquote>
        
        <!--Zoom effect-->
<div class="view overlay zoom">
  <center>

    <img img src="img/donacion/donate.jpg" class="img-fluid " alt="zoom" style="width: 300px">
  </center>
    {{-- <img src="img/donacion/donate2.jpg" class="img-fluid rounded-circle"
      alt="zoom" style="width: 110px; float: right;">  --}}
    <div class="mask flex-center waves-effect waves-light">
      
    </div>
  </div>
  
  <!-- Hoverable -->
</div>
<nav class="navbar navbar-default navbar-static-top" style="height: 100px;">
       
  <!-- Branding Image -->
  <div class="container-fluid" style="display: flex;">  
      <a href="{{ url('/aliados')}}" class="btn btn-outline-primary btn-lg" 
      style="width: 150px; height: 40px; font-size: 13px; font-weight: bold;"
      >Aliados</a>
      <a href="{{ url('/')}}" class="btn btn-outline-secondary btn-lg" 
      style="width: 150px; height: 40px; font-size: 13px; font-weight: bold;"
      >Necesidades</a> 
  </div>
</nav> 


@endsection