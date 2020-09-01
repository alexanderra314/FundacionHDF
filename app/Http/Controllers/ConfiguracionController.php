<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipo_Documento;
use DB;

class ConfiguracionController extends Controller
{
    function index(){
        $tipos_documentos = Tipo_Documento::all();
        return view('tipos_documentos.index', compact('tipos_documentos'));
    }

    function store($data){ 

        $dato = json_decode($data, true); 

           $tipos_documentos = [];  
           $tipos_documentos['nombre'] = $dato["Nombre"];  
           $tipos_documentos['siglas'] = $dato["Siglas"];  

           return Tipo_Documento::create($tipos_documentos);
    }

    public function editar($id)
    {
        $tipo_documento = Tipo_Documento::find($id);
        return ($tipo_documento);
    }

    public function update($data)
    {
        $dato = json_decode($data, true);
        // $tipos_documentos = Tipo_Documento::find($dato['Id']); 
        // $tipo_documento['id'] = $dato["Id"];
        // $tipo_documento['nombre'] = $dato["Nombre"];  
        // $tipo_documento['sigla'] = $dato["Siglas"];  
        // $tipos_documentos->update($tipo_documento);
        $ok = DB::table('tipos_documentos')
            ->where('id', $dato['Id'])
            ->update([
                'id' =>  $dato['Id'],
                'nombre' => $dato["Nombre"],
                'siglas' => $dato["Siglas"],
            ]);
        // dd($tipos_documentos);
        return($ok);
    }

}

