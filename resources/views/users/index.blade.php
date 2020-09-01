@extends('layouts.app_tablero') 
@section('main-content')
<div class="content-header">
    <center>  
        <button type="button" style="width: 20rem;" class="btn btn-outline-primary"  
        data-toggle="modal" data-target="#crear_user_modal">CREAR NUEVO USER</button>
    </center>
    
    @include('users.cambio_user_rol_modal')
    @include('users.editar_user_Modal')
    @include('users.crear_user_modal')
    <div class="row">
        <div class="card w-100">
            {{-- @include('partials.contentheader') --}}
            <div class="container"> 
                <div class="panel-body NoOverflow" id="tabla_div_user">
                    <table id="tabla_users" class="table table-striped table-bordered table-condensed table-bordered table-hover" width='100%¿}'>
                        <thead class="thead-dark">
                            <tr>
                          

                                    <th>ID</th>
                                    <th>USUARIO</th> 
                                    <th>EMAIL</th>
                                    <th>ROL</th>
                                    <th>ESTADO</th> 
                                    <th>EDITAR</th> 
                                    <th>RESTABLECER</th> 
                               
                            </tr>
                        </thead>
                        <tbody id="cuerpo">
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id}}</td>
                                <td>{{ $user->name}}</td>
                                <td>{{ $user->email}}</td>
                                <td><center> 
                                    <a type="button" style="width: 8.5rem;font-weight: bold;"
                                    onclick="envio_rol_user('{{ $user->id}}')"
                                    data-toggle="modal" data-target="#modalCambioUserRol">{{ $user->rol->nombre}}</a>
                                </center>
                                </td>
                                <input type="hidden" name="" id="estado{{ $user->id}}" value="{{ $user->estado}}">
                                
                                {{-- {{ Auth::User()->rol_id }} --}}
                                @if ( $user->estado == '1') 
                                <td>
                                    <center> 
                                        
                                        @if (Auth::User()->rol_id == 1)
                                        <a type="button" style="width: 8.5rem;color: blue;" 
                                            onclick="cambio_estado_user({{ $user->id}},this)">ACTIVO</a>
                                        @else
                                        <a type="button" style="width: 8.5rem;color: blue;"
                                            disabled>ACTIVO</a>
    
                                        @endif
                                    </center>
                                </td>
                                @else
                                <td>
                                    <center> 
                                        @if (Auth::User()->rol_id == 1)
                                        <a type="button" style="width: 8.5rem;color: red;"
                                            onclick="cambio_estado_user( {{ $user->id}},this)">INACTIVO</a>
                                        
                                        @else
                                        <a type="button"  style="width: 8.5rem;color: red;"
                                            disabled>INACTIVO</a>
                                        @endif
                                    </center>

                                </td>
                                @endif

                                <td>
                                    <center>

                                        <a type="button" 
                                            data-toggle="modal" data-target="#modalRegisterFormeditar"
                                            onclick="editar_user({{ $user->id}})"
                                            style="
                                                font-size: 20px;
                                                color: #479c2c;
                                                font-weight: bold;
                                            "><i class="fas fa-edit"></i></a>
                                    </center>
                                    </td>
                                <td>
                                    <center>

                                        <a type="button"  
                                            onclick="restablecer_contrasena_user({{ $user->id}})"
                                            style="
                                                font-size: 20px;
                                                color: #ea0b0b;
                                                font-weight: bold;
                                            "><i class="fas fa-key"></i></a>
                                    </center>
                                    
                                    </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
  $('.js-example-responsive').select2();
});
</script>

@endsection