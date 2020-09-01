@extends('layouts.app') 
@section('main-content') 
@if (session('alert'))
<div class="alert alert-success" style="
font-size: 20px;
">
    {{ session('alert') }}
</div>
@endif 
 <!-- Default form register -->
 <div class="card-body px-lg-5 pt-0" style="
 font-size: 20px;
 font-family: cursive;
 font-weight: bold;
">
<form method="post" class="text-center border border-light p-5" action="{{ url('asociados/create_usuario') }}" enctype="multipart/form-data">

    <p class="card-header info-color white-text text-center py-4">DATOS NUEVOS ASOCIADOS</p>
    <br>
    <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
        
       Los datos con <i class="fas fa-asterisk"></i> son obligatorios.
    </small>
    <br>
    <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
        &nbsp &nbsp &nbsp<i class="fas fa-address-card"></i>
       Datos Identificación &nbsp &nbsp &nbsp &nbsp <i class="far fa-arrow-alt-circle-left"></i> &nbsp &nbsp &nbsp &nbsp ----------------------------------------- &nbsp &nbsp &nbsp &nbsp <i class="far fa-arrow-alt-circle-right"></i> &nbsp &nbsp &nbsp &nbsp <i class="fas fa-birthday-cake"></i> Fecha de Nacimiento
    </small>
    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            
            <select class="form-control" id="tipo_documento" name="tipo_documento" searchable="Selecione Tipo de Documento" style="
            /* width: 100px; */
            height: 50px;
            font-size: 14px;
        ">
                <option value="" disabled selected>* Selecione Tipo de Documento</option>
                <option value="1">CC</option>
                <option value="2">CE</option>
                <option value="3">PASAPORTE</option> 
              </select> 
        </div>
        <div class="col">
            <!-- First name -->
            <input type="text" id="usuario_id" name="usuario_id" class="form-control" placeholder="* Numero de Identificación" style="
            /* width: 100px; */
            height: 50px;
            font-size: 14px;
        " required>
        </div>
 
        <div class="col">
            <input type="date" id="usuario_fecha" name="usario_fecha" class="form-control" placeholder="Fecha de Nacimiento" style="
            /* width: 100px; */
            height: 50px;
            font-size: 14px;
        " >
        </div>
        
    </div>
    <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
        <i class="fas fa-address-card"></i>
       Datos Personales
    </small>


    <div class="form-row mb-4">  
        <div class="col">
            <!-- First name -->
            <input type="text" id="usuario_name1" name="usuario_name1" class="form-control" placeholder="* Primer Nombre" style="
            /* width: 100px; */
            height: 50px;
            font-size: 14px;
        " onkeyup="javascript:this.value=this.value.toUpperCase();" required>
        </div>
        <div class="col">
            <!-- E-mail -->
    <input type="text" id="usuario_name2" name="usuario_name2" class="form-control mb-4" placeholder="Segundo Nombre" style="
    /* width: 100px; */
    height: 50px;
    font-size: 14px;
" onkeyup="javascript:this.value=this.value.toUpperCase();">
        </div>
        <div class="col">
            <!-- First name -->
            <input type="text" id="usuario_apellido1" name="usuario_apellido1" class="form-control" placeholder="* Primer Apellido" style="
            /* width: 100px; */
            height: 50px;
            font-size: 14px;
        " onkeyup="javascript:this.value=this.value.toUpperCase();" required>
        </div>
        <div class="col">
            <!-- E-mail -->
    <input type="text" id="usuario_apellido2" name="usuario_apellido2" class="form-control mb-4" placeholder="Segundo Apellido" style="
    /* width: 100px; */
    height: 50px;
    font-size: 14px;
" onkeyup="javascript:this.value=this.value.toUpperCase();">
        </div>
    </div>   
    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4"> 
        <i class="fas fa-map-marked-alt"></i>
        Datos de Ubicación
    </small>
    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="usuario_direccion"  name="usuario_direccion" class="form-control" placeholder="Dirección" style="
            /* width: 100px; */
            height: 50px;
            font-size: 14px;
        " onkeyup="javascript:this.value=this.value.toUpperCase();">
        </div>
        <div class="col">
            <!-- E-mail -->
            <input type="text" id="usuario_barrio"  name="usuario_barrio" class="form-control mb-4" placeholder="Barrio" style="
            /* width: 100px; */
            height: 50px;
            font-size: 14px;
        " onkeyup="javascript:this.value=this.value.toUpperCase();">
        </div>
        <div class="col">
            <!-- First name -->
            <input type="text" id="usuario_ciudad" name="usuario_ciudad" class="form-control" placeholder="Ciudad" style="
            /* width: 100px; */
            height: 50px;
            font-size: 14px;
        " onkeyup="javascript:this.value=this.value.toUpperCase();">
        </div>
        <div class="col">
            <!-- E-mail -->
            <input type="text" id="usuario_departamento" name="usuario_departamento" class="form-control mb-4" placeholder="Departamento" style="
            /* width: 100px; */
            height: 50px;
            font-size: 14px;
        " onkeyup="javascript:this.value=this.value.toUpperCase();">
        </div>
    </div>  
    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4"> 
        <i class="fas fa-mobile-alt"></i>
       Datos de Contacto
    </small>
    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="usuario_cel1" name="usuario_cel1" class="form-control" placeholder="* Numero Celular" style="
            /* width: 100px; */
            height: 50px;
            font-size: 14px;
        " required>
        </div>
        <div class="col">
            <!-- E-mail -->
    <input type="text" id="usuario_fijo" name="usuario_fijo" class="form-control mb-4" placeholder="Fijo" style="
    /* width: 100px; */
    height: 50px;
    font-size: 14px;
">
        </div>
        <div class="col">
            <!-- E-mail -->
    <input type="email" id="usuario_email" name="usuario_email" class="form-control mb-4" placeholder="* Correo Electronico" style="
    /* width: 100px; */
    height: 50px;
    font-size: 14px;
" requiered>
        </div>
    </div> 
    <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
        <i class="fas fa-medal"></i>
       Por que quiere pertenecer a la fundación?
    </small>
    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <textarea class="form-control rounded-0" id="usuario_objecto" name="usuario_objecto"  rows="3" placeholder="Mensaje" style="
            /* width: 100px; */
            height: 50px;
            font-size: 14px;
        " onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
        </div> 
    </div>  
   
    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit" style="
    height: 40px;
    font-size: 18px;
">Registrar</button> 

</form>
</div> 
@endsection