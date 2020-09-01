@extends('layouts.app_tablero') 
@section('main-content')

<div class="content-header"> 
    
    @include('roles.editar_rol_Modal')
    @include('roles.crear_rol_modal')
    <center>  
        <a type="button" style="width: 20rem;" class="btn btn-outline-primary"  
        data-toggle="modal" data-target="#crear_rol_modal">CREAR NUEVO ROL</a>
    </center>
    <div class="row">
        <div class="card w-100"> 
            <div class="container"> 
                <br>
                <div class="panel-body NoOverflow" id="tabla_div_rol" style="
                text-align: justify;
            ">
                    <table id="tabla_roles" class="table table-striped table-bordered table-condensed table-bordered table-hover " width='100%¿}'>
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>  
                                <th>DESCRIPCIÓN</th> 
                                <th>EDITAR</th>  
                                {{-- <th>DESABILITAR</th>  --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $rol)
                            <tr>
                                <td>{{ $rol->id}}</td>
                                <td>{{ $rol->nombre}}</td> 
                                <td>{{ $rol->descripcion}}</td> 
                                {{-- @if ( $rol->estado == 'Activo') 
                                <td>
                                    @if (Auth::User()->rol_id== '1')
                                    <a type="button" style="width: 8rem;" 
                                        onclick="cambio_estado_rol({{ $rol->id}},this)">Activo</i></a>
                                    @else
                                    <a type="button" style="width: 8rem;" 
                                        disabled>Activo</i></a>

                                    @endif
                                </td>
                                @else
                                <td>
                                    @if (Auth::User()->rol_id== '1')
                                    <a type="button" style="width: 8rem;" 
                                        onclick="cambio_estado_rol( {{ $rol->id}},this )">Inactivo</a>
                                    @else
                                    <a type="button" style="width: 8rem;" 
                                        onclick="cambio_estado_rol( {{ $rol->id}},this )" disabled>Inactivo</a>
                                    @endif

                                </td>
                                @endif --}}
                                <td>
                                <center>
                                    <a type="button"  
                                        data-toggle="modal" data-target="#modalEditarRol"
                                        onclick="editar_rol({{ $rol->id}})" style="
                                            font-size: 30px;
                                        "><i class="fas fa-exchange-alt"></i></a>
                                        </center>
                                </td>
                                {{-- @if (Auth::User()->rol_id== '1')
                                    
                                <td>
                                <center>
                                    <a type="button"   
                                        onclick="desabilitar_rol({{ $rol->id}})" style="
                                            font-size: 30px;
                                        "><i class="far fa-trash-alt"></i></a>
                                        </center>
                                </td>
                                @else
                                <td>
                                <center>
                                    <a type="button"   
                                        disabled><i class="far fa-trash-alt" style="
                                            font-size: 30px;
                                        "></i></a>
                                </center>
                                </td> 
                                @endif  --}}
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