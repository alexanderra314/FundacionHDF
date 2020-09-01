@extends('layouts.app_tablero') 
@section('main-content')

<div class="content-header"> 
    <center>  
        <h4 style="
        font-family: auto;
        font-weight: bold;
    ">ORGANIGRAMA FUNDACIÓN HUELLAS DEL FUTURO</h4>
    </center> 
</div>

<div class="content"> 
    <center>  
        <h4 style="
        font-family: auto;
        font-weight: bold;
        margin: 50PX;
        /* background: #ffeb00; */
        color: black;
        height: 1px;
    ">JUNTA DIRECTIVA</h4>
    </center> 
    <hr style="background-color: #0056b2;height: 10px;min-height: 100px;" width="1%"/> 
    <hr style="background-color: #0056b2; height: 10px;"  width="69%"/>
    <div class="row">
      <div class="col-md-4">
        <hr  style="background-color: #0056b2;height: 10px;min-height: 100px;width: 10px;" />
      </div>
      <div class="col-md-4">
        <hr    style="background-color: #0056b2;height: 10px;min-height: 100px;width: 10px;" />
      </div>
      <div class="col-md-4">
        <hr style="background-color: #0056b2;height: 10px;min-height: 100px;width: 10px;" />
      </div> 
    </div>  
  </div> 
<div class="container-fluid">
@foreach($usuarios as $user)
    <div class="row">
      <div class="col-md-4 " style="
       border: solid;lor: blueviolet; 
      font-size: 16px;
      color: black;
      font-family: initial;
  ">
          @if ($user->rol_id == 3)
            <center>

                  <span>{{ $user->primer_nombre.' '.$user->segundo_nombre.' '.$user->primer_apellido.' '.$user->segundo_apellido }}</span><br>
                  
                </center>
                @endif
                <center>
                    <span>SECRETARIO</span>

            </center>
      
    </div>
    
      <div class="col-md-4" style="
       border: solid;lor: #e22b2b; 
      font-size: 16px;
      color: black;
      font-family: initial;
  ">
        @if ($user->rol_id == 2)
        <center>

              <span>{{ $user->primer_nombre.' '.$user->segundo_nombre.' '.$user->primer_apellido.' '.$user->segundo_apellido }}</span><br>
              

            </center>
        @endif
        <center>

            <span>PRESIDENTE</span>
        </center>
      
    </div>
    
      <div class="col-md-4" style="
       border: solid;lor: #64e22b; 
      font-size: 16px;
      color: black;
      font-family: initial;
  ">
         @if ($user->rol_id == 4)
         <center>
 
               <span>{{ $user->primer_nombre.' '.$user->segundo_nombre.' '.$user->primer_apellido.' '.$user->segundo_apellido }}</span><br>
               
 
             </center>
             @endif
             <center>

                <span>TESORERO</span>
            </center>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-4">
      <hr  style="background-color: #0056b2;height: 10px;min-height: 100px;width: 10px;" />
    </div>
    <div class="col-md-4">
      <hr   style="background-color: #0056b2;height: 10px;min-height: 100px;width: 10px;" />
    </div>
    <div class="col-md-4">
      <hr  style="background-color: #0056b2;height: 10px;min-height: 100px;width: 10px;" />
    </div> 
  </div>


<div class="container">
{{-- @foreach($usuarios as $user) --}}
    <div class="row">
      <div class="col-sm " style="
       border: solid;lor: blueviolet; 
      font-size: 16px;
      color: black;
      font-family: initial;
  ">
          @if ($user->rol_id == 9)
            <center>

                  <span>{{ $user->primer_nombre.' '.$user->segundo_nombre.' '.$user->primer_apellido.' '.$user->segundo_apellido }}</span><br>
                  
                </center>
                @endif
                <center>
                    <span>SECRETARIO SUPLENTE</span>

            </center>
      </div>
      <div class="col-sm" style="
       border: solid;lor: #e22b2b; 
      font-size: 16px;
      color: black;
      font-family: initial;
  ">
        @if ($user->rol_id == 8)
        <center>

              <span>{{ $user->primer_nombre.' '.$user->segundo_nombre.' '.$user->primer_apellido.' '.$user->segundo_apellido }}</span><br>
              

            </center>
        @endif
        <center>

            <span>PRESIDENTE SUPLENTE</span>
        </center>
      </div>
      <div class="col-sm" style="
       border: solid;lor: #64e22b;
      font-size: 16px;
      color: black;
      font-family: initial;
  ">
         @if ($user->rol_id == 10)
         <center>
 
               <span>{{ $user->primer_nombre.' '.$user->segundo_nombre.' '.$user->primer_apellido.' '.$user->segundo_apellido }}</span><br>
               
 
             </center>
             @endif
             <center>

                <span>TESORERO SUPLENTE</span>
            </center>
      </div>
    </div>
  </div>
  <br>
  <hr style="background-color: #f16e07; height: 10px;"  width="69%"/>
<div class="container">
{{-- @foreach($usuarios as $user) --}}
    <div class="row">
      <div class="col-sm " style="
       border: solid;
      font-size: 16px;
      color: black;
      font-family: initial;
  ">
          @if ($user->rol_id == 5)
            <center>

                  <span>{{ $user->primer_nombre.' '.$user->segundo_nombre.' '.$user->primer_apellido.' '.$user->segundo_apellido }}</span><br>
                  
                </center>
                @endif
                <center>
                    <span>REVISOR FISCAL</span>

            </center>
      </div>
     
      </div>
      <br>
  </div>
  @break
@endforeach

@endsection