@extends('layouts.app') 
@section('main-content')
 <!-- Default form register -->
 <div class="card-body px-lg-5 pt-0" style="
 font-size: 20px;
 font-family: cursive;
 font-weight: bold;
">
<form class="text-center border border-light p-5" action="#!">

    <p class="card-header info-color white-text text-center py-4">DATOS DE LA ORGANIZACION</p>
    <br>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="organiacion_nit" class="form-control" placeholder="Nit" style="
            /* width: 100px; */
            height: 50px;
            font-size: 14px;
        ">
        </div>
        <div class="col">
            <!-- First name -->
            <input type="text" id="organizacion_name" class="form-control" placeholder="Nombre" style="
            /* width: 100px; */
            height: 50px;
            font-size: 14px;
        ">
        </div>
        <div class="col">
            <!-- E-mail -->
    <input type="email" id="organizacion_email" class="form-control mb-4" placeholder="E-mail" style="
    /* width: 100px; */
    height: 50px;
    font-size: 14px;
">
        </div>
    </div>   
    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4"> 
        <i class="fas fa-map-marked-alt"></i>
        Datos de Ubicación
    </small>
    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="organizacion_direccion" class="form-control" placeholder="Dirección" style="
            /* width: 100px; */
            height: 50px;
            font-size: 14px;
        ">
        </div>
        <div class="col">
            <!-- E-mail -->
            <input type="text" id="organizacion_barrio" class="form-control mb-4" placeholder="Barrio" style="
            /* width: 100px; */
            height: 50px;
            font-size: 14px;
        ">
        </div>
        <div class="col">
            <!-- First name -->
            <input type="text" id="organizacion_ciudad" class="form-control" placeholder="Ciudad" style="
            /* width: 100px; */
            height: 50px;
            font-size: 14px;
        ">
        </div>
        <div class="col">
            <!-- E-mail -->
            <input type="text" id="organizacion_departamento" class="form-control mb-4" placeholder="Departamento" style="
            /* width: 100px; */
            height: 50px;
            font-size: 14px;
        ">
        </div>
    </div>  
    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4"> 
        <i class="fas fa-mobile-alt"></i>
       Datos de Contacto
    </small>
    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="organizacion_cel1" class="form-control" placeholder="Numero Celular" style="
            /* width: 100px; */
            height: 50px;
            font-size: 14px;
        ">
        </div>
        <div class="col">
            <!-- E-mail -->
    <input type="text" id="organizacion_cel2" class="form-control mb-4" placeholder="Segundo Numero Contacto" style="
    /* width: 100px; */
    height: 50px;
    font-size: 14px;
">
        </div>
        <div class="col">
            <!-- E-mail -->
    <input type="text" id="organizacion_fijo" class="form-control mb-4" placeholder="fijo" style="
    /* width: 100px; */
    height: 50px;
    font-size: 14px;
">
        </div>
    </div> 
    <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
        <i class="fas fa-medal"></i>
       Objecto de la Organización
    </small>
    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <textarea class="form-control rounded-0" id="organizacion_objecto" rows="3" placeholder="Mensaje" style="
            /* width: 100px; */
            height: 50px;
            font-size: 14px;
        "></textarea>
        </div> 
    </div> 
    <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
        <i class="fas fa-address-card"></i>
       Persona de Contacto
    </small>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="organizacion_nombres" class="form-control" placeholder="Nombre" style="
            /* width: 100px; */
            height: 50px;
            font-size: 14px;
        ">
        </div>
        <div class="col">
            <!-- E-mail -->
    <input type="text" id="organizacion_apellidos" class="form-control mb-4" placeholder="Apellido" style="
    /* width: 100px; */
    height: 50px;
    font-size: 14px;
">
        </div>
        <div class="col">
            <!-- E-mail -->
    <input type="text" id="organizacion_cargo" class="form-control mb-4" placeholder="cargo" style="
    /* width: 100px; */
    height: 50px;
    font-size: 14px;
">
        </div>
    </div>   

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit" style="
    height: 40px;
    font-size: 18px;
">Registrar</button> 

</form>
</div>
<!-- Default form register -->
@endsection