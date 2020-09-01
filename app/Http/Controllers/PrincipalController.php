<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class PrincipalController extends Controller
{

    // $data = $request->all();
    // echo "<pre>";
    // print_r($data);
    // die;

    public function quien()
    {
        return view('principales.quien');
    }
    public function que()
    {
        return view('principales.que');
    }
    public function donacion()
    {
        return view('principales.donacion');
    }
    public function aliado()
    {
        return view('principales.aliado');
    }
    public function asociado()
    {
        return view('principales.asociado');
    }

    public function create_usuario(Request $request)
    {
        $data = $request->all();
        // echo "<pre>"; 
        // print_r($data);
        // die;
        $usuario = []; 
        $usuario["tipo_documento_id"] = $data["tipo_documento"];
        $usuario["identificacion"] = $data["usuario_id"];
        $usuario["primer_nombre"] = $data["usuario_name1"];
        $usuario["segundo_nombre"] = $data["usuario_name2"];
        $usuario["primer_apellido"] = $data["usuario_apellido1"];
        $usuario["segundo_apellido"] = $data["usuario_apellido2"];
        $usuario["fecha_nacimiento"] = $data["usario_fecha"];
        $usuario["direccion"] = $data["usuario_direccion"];
        $usuario["barrio"] = $data["usuario_barrio"];
        $usuario["ciudad"] = $data["usuario_ciudad"];
        $usuario["departamento"] = $data["usuario_departamento"];
        $usuario["telefono"] = $data["usuario_cel1"];
        $usuario["fijo"] = $data["usuario_fijo"];
        $usuario["email"] = $data["usuario_email"];
        $usuario["objecto"] = $data["usuario_objecto"];
        $usuario["rol_id"] = 11;
        $usuario["estado"] = 0;
        // $usuario["user_id"] = 2;

        $ok =  Usuario::create($usuario); 
        if($ok){

            return redirect()->back()->with('alert','Usuario creado correctamente');
        }else{
            
            return redirect()->back()->with('alert','Error a crear el Usuario comuniquese con el administrador');
        }

       
    }

}
