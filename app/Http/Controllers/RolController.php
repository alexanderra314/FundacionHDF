<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rol;

class RolController extends Controller
{
    function index(){
        $roles = Rol::all();
        return view('roles.index', compact('roles'));
    }

    function store($data){ 

        $dato = json_decode($data, true); 

           $rol = [];  
           $rol['nombre'] = $dato["Nombre"];
           $rol['estado'] = $dato["Estado"];   
           return Rol::create($rol);
    }

    public function editar($id)
    {
        $rol = Rol::find($id);
        return ($rol);
    }

    public function update($data)
    {
        $dato = json_decode($data, true);
        $rol = Rol::find($dato['Id']); 
        $roles['id'] = $dato["Id"];
        $roles['nombre'] = $dato["Nombre"];  
        $roles['descripcion'] = $dato["Texto"]; 
        
        $rol->update($roles);
        // dd($rol);
        // return($rol);
    }

}
