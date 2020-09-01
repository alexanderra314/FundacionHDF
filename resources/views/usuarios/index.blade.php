@extends('layouts.app_tablero') 
@section('main-content')
<div class="content-header"> 
    @include('usuarios.editar_usuario_Modal1')
    @include('usuarios.cambio_rol_usuario_modal')
    @include('usuarios.cambio_td_usuario_modal')
    @include('users.crear_user_modal')
    <center>  
        <h4 style="
        font-family: auto;
        font-weight: bold;
    ">TABLA DE USUARIOS DEL SISTEMA</h4>
    </center>
    
    <div class="row">
        <div class="card w-100">
            {{-- @include('partials.contentheader') --}}
            <div class="container">

                <br>
                <div class="panel-body NoOverflow" id="tabla_div_usuario">
                    <table id="tabla_usuarios" class="table table-striped table-bordered table-condensed table-bordered table-hover table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>TD</th>
                                <th>IDENTIFICACIÓN</th> 
                                <th>NOMBRES</th>
                                <th>APELLIDOS</th>
                                <th>CELULAR</th>
                                <th>CORREO ELECTRONICO</th>
                                <th>USER NAME</th>
                                <th>ROL</th> 
                                <th>VER</th> 
                                {{-- <th>RESTABLECER</th>  --}}
                            </tr>
                        </thead>
                        <tbody id="cuerpo">
                            @foreach($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->id}}</td>
                                <td><a type="button"  
                                    data-toggle="modal" data-target="#cambio_tp_usuario_modal"
                                    style="
                                        width: 50px;
                                        height: 50px;
                                        font-family: cursive;
                                        font-weight: bold;
                                    "
                                    onclick="cargar_usuario_tipo_documento( {{ $usuario->id }},'{{ $usuario->primer_nombre }}','{{ $usuario->primer_apellido }}' ,'{{ $usuario->identificacion}}',this)">{{ $usuario->tipo->siglas }}</a></td>
                                {{-- <td>{{ $usuario->rol->nombre}}</td>  --}}
                                
                                <td>{{ $usuario->identificacion}}</td>
                                <td>{{ $usuario->primer_nombre.' '.$usuario->segundo_nombre}}</td>
                                <td>{{ $usuario->primer_apellido.' '.$usuario->segundo_apellido}}</td>
                                <td>{{ $usuario->telefono}}</td> 
                                <td>{{ $usuario->email}}</td> 
                                @php
                                    $cont = 0
                                    
                                @endphp
                                
                                @foreach ($Users as $user)
                                    @if ($usuario->id == $user->usuario_id) 
                                        @php
                                            $cont ++;
                                            // echo $cont;
                                        @endphp
                                    @endif 
                                    @if ($cont == 1)
                                        <td>{{ $user->name}}</td> 
                                        @break 
                                    @endif
                                @endforeach

                                @if ($cont == 0) 
                                    <td><a type="button" data-toggle="modal" data-target="#crear_user_modal">No Definido</a></td>
                                @endif 

                                <td><a type="button"  
                                    data-toggle="modal" data-target="#cambio_rol_usuario_modal"
                                    style="
                                        width: 180px;
                                        height: 50px;
                                        font-family: cursive;
                                        font-weight: bold;
                                    "
                                    onclick="cargar_usuario_rol( {{ $usuario->id }},'{{ $usuario->primer_nombre }}','{{ $usuario->primer_apellido }}' ,'{{ $usuario->identificacion}}',this)">{{ $usuario->rol->nombre }}</a></td>
                                
                                <td>
                                <center>
                                <a type="button" 
                                        data-toggle="modal" data-target="#ModalEditarUsuario"
                                        style="
                                        width: 100px;
                                        height: 50px;
                                        font-family: cursive;
                                        font-weight: bold; 
                                    " outline: none;
                                        onclick="editar_usuario({{ $usuario->id}})"
                                        
                                        {{-- href="{{ url('/usuarios/editar/')}}" --}}
                                        {{-- href="{{ url("/usuarios/editar/"'{{ $usuario->id}}')}}" --}}
                                       ><i class="far fa-eye"></i></a>
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

@endsection