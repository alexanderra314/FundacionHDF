<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Rol;
use App\Tipo_Documento;
use App\User;
use DB;

class UsuarioController extends Controller
{
    function index(){
        $usuarios = Usuario::all();
        $roles = Rol::all();
        $tipos = Tipo_Documento::all();
        $Users = User::all();
        // var_dump($usuarios);
        //  echo "<pre>";
        // print_r($usuarios); 
        // print_r($roles); 
        // print_r($tipos); 
        // die;
        return view('usuarios.index', compact('usuarios','roles','tipos','Users'));
    }

    // function store($data){ 

    //     $dato = json_decode($data, true); 

    //        $usuario = [];  
    //        $usuario['name'] = $dato["Nombre"];
    //        $usuario['email'] = $dato["Email"]; 
    //        $usuario['rol_id'] = $dato["Rol_Id"]; 
    //        $usuario['estado'] = $dato["Estado"]; 
    //        $usuario['password'] = Hash::make('123456789');
           
   
    //        return Usuario::create($usuario);
    // }

    function cambio_rol($data){
        $dato = json_decode($data, true);  
        $rol_id = $dato['Seleccion'];
        $ok = DB::table('usuarios')
        ->where('id', $dato['Id'])
        ->update(['rol_id' => $rol_id]); 
        // echo "<pre>";
        // print_r($users[0]); 
        // die;
        // dd($ok);
        return ($ok);   
    }
    function cambio_td($data){
        $dato = json_decode($data, true);  
        $tipo = $dato['Seleccion'];
        // echo "<pre>";
        // print_r($dato); 
        // die;
        // dd($dato);
        $ok = DB::table('usuarios')
        ->where('id', $dato['Id'])
        ->update(['tipo_documento_id' => $tipo]);

        // $users = DB::table('usuarios')
        //     ->join('roles', 'usuarios.id', '=', 'roles.id')  
        //     ->select('roles.nombre')
        //     ->where('usuarios.id', '=', $dato['Id'])
        //     ->get();
        return ($ok);   
    }

    function editar_usuario($data){
        // dd($data);
       $datos = [];
        $usuarios = Usuario::find($data);
        $tipos_documentos = Tipo_Documento::all();
        // echo "<pre>";
        // print_r($usuarios); 
        // die;
        $datos['usuario'] = $usuarios;
        $datos['tipos_documentos'] = $tipos_documentos;
        return ($datos);
    }

   function update($data){
    $dato = json_decode($data, true);  
    $usuario = Usuario::find($dato['ID']);
    // echo "<pre>";
    // print_r($dato); 
    // die;
    // $ok = DB::table('usuarios')
    //     ->where('id', $dato['Id'])
    //     ->update([
    //         'identificacion' = $data["NC"]
    //         'primer_nombre' = $data["PN"]
    //         ]); 
    //      

    
    $usuario->identificacion = $dato["NC"];
    $usuario->primer_nombre = $dato["PN"];
    $usuario->segundo_nombre = $dato["SN"];
    $usuario->primer_apellido = $dato["PA"];
    $usuario->segundo_apellido = $dato["SA"];
    $usuario->fecha_nacimiento = $dato["FN"];
    $usuario->direccion = $dato["DI"];
    $usuario->barrio = $dato["BA"];
    $usuario->ciudad = $dato["CI"];
    $usuario->departamento = $dato["DE"];
    $usuario->telefono = $dato["CE"];
    $usuario->fijo = $dato["FJ"];
    $usuario->email = $dato["EM"];
    $usuario->objecto = $dato["O"]; 
    $usuario->save();
    return ($usuario);  
   }
}
