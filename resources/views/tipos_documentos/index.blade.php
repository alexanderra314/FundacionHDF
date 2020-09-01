@extends('layouts.app_tablero') 
@section('main-content')

<div class="content-header"> 
    
    @include('tipos_documentos.editar_tipo_documento_Modal')
    @include('tipos_documentos.crear_tipo_documento_modal')
    <center>  
        <a type="button" style="width: 20rem;" class="btn btn-outline-primary"  
        data-toggle="modal" data-target="#crear_tipo_documento_modal">CREAR NUEVO TIPO DE DOCUMENTOS</a>
    </center>
</div>
    <div class="row">
        <div class="card w-100"> 
            <div class="container">  
                <div class="panel-body NoOverflow" id="tabla_div_tipo_documento">
                    <table id="tabla_tipos_documentos" class="table table-striped table-bordered table-condensed table-bordered table-hover" width='100%¿}'>
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>    
                                <th>SIGLAS</th>    
                                <th>EDITAR</th>  
                                <th>ELIMINAR</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tipos_documentos as $tipo_documento)
                            <tr>
                                <td>{{ $tipo_documento->id}}</td>
                                <td>{{ $tipo_documento->nombre}}</td>   
                                <td>{{ $tipo_documento->siglas}}</td>   
                                <td>
                                <center>
                                    <a type="button" style="width: 8.5rem; font-size: 30px;" 
                                    data-toggle="modal" data-target="#ModalTipoDocumento"
                                    onclick="editar_tipo_documento({{ $tipo_documento->id}})"><i class="far fa-eye"></i></a>
                                </td> 
                                    <center>
                                <td>
                                 <center>
                                <a type="button" style="width: 8.5rem; font-size: 30px;" 
                                        onclick="eliminar_tipo_documento({{ $tipo_documento->id}})"><i class="far fa-trash-alt"></i></a>
                                    </center>
                                </td> 
                            </tr>
                            @endforeach
                        </tbody>
                    </table> 
                </div> 
            </div>
        </div>
    </div> 
    {{-- <script>
        $(document).ready(function (){
              $('.name_tipos_documentos_editar').keyup(function (){
                this.value = (this.value + '').replace(/[^0-9]/g, '');
              });
            });
    </script>  --}}
@endsection