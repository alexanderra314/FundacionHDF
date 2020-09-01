@extends('layouts.app_tablero')
@section('main-content')
@if (session('alert'))
<div class="alert alert-seccess">
  {{ session('alert') }}
</div>
@endif

<div class="content-header">
  <center>
    <h4 style="
        font-family: auto;
        font-weight: bold;
    ">ACTAS</h4>
  </center>
</div>
<br>
<div class="panel-body NoOverflow" id="tabla_div_documento">
  <table id="tabla_documentos" class="table table-striped table-bordered table-condensed table-bordered table-hover"
    width='100%¿}'>
    <thead class="thead-dark">
      <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>FECHA</th>
        <th>ESTADO</th>
        <th>VER</th>
        <th>ELIMINAR</th>
      </tr>
    </thead>
    <tbody id="cuerpo">
      @foreach($documentaiones as $item)
      @if ($item->carpeta == "actas")
      @if ( $item->estado == '1')

      <tr>
        <td>{{ $item->id}}</td>
        <td>{{ $item->nombre}}</td>
        <td>{{ $item->created_at}}</td>
        @if ( $item->estado == '1')
        <td>
          @if (Auth::User()->rol_id== '1')
          <button type="button" style="width: 8.5rem;" class="btn btn-success"
            onclick="cambio_estado_documento({{ $item->id}},this)">ACTIVO</i></button>
          @else
          <button type="button" style="width: 8.5rem;" class="btn btn-success" disabled>ACTIVO</i></button>

          @endif
        </td>
        @else
        <td>
          @if (Auth::User()->rol_id== '1')
          <button type="button" style="width: 8.5rem;" class="btn btn-danger"
            onclick="cambio_estado_documento( {{ $item->id}},this)">INACTIVO</i></button>

          @else
          <button type="button" style="width: 8.5rem;" class="btn btn-danger" disabled>INACTIVO</i></button>
          @endif

        </td>
        @endif
        <td style=" font-size: 30px; ">
          <center>
            <a class="iframeLink" href="storage/{{ $item->carpeta }}/{{ $item->nombre }}"><i class="far fa-eye"></i></a>
          </center>
        </td>
        @if (Auth::User()->rol_id== '1')
        <td style="font-size: 30px; ">
          <center>
            <a class="button" onclick="eliminar_pdf('{{ $item->id}}','{{ $item->nombre }}','{{ $item->carpeta }}')"><i
                class="fas fa-times"></i></a>
          </center>
        </td>
        @else
        <td style=" font-size: 30px;">
          <center>
            <a class="button"><i class="fas fa-times"></i></a>
            @endif
            @endif
            @endif
            @endforeach
            </th>
    </tbody>
  </table>
  <nav class="navbar navbar-default navbar-static-top" style="height: 100px;">
    <form class="md-form" method="post" enctype="multipart/form-data" files="true"
      action="{{ url('upload_upload_acta') }}" style="
  width: 1700px;
">
      {{ csrf_field() }}
     
      <div class="form-row mb-6">
        <div class="col">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFileLang" lang="es" name='Archivo'>
            <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
          </div>
        </div>
        <div class="col">
          <button type="submit" class="btn btn-outline-primary waves-effect"><i class="fas fa-th-list pr-2"
              aria-hidden="true"></i>Cargar</button>
        </div>
      </div>

    </form>

  </nav>

  @endsection