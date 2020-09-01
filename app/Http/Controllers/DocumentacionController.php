<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Documentacion;

class DocumentacionController extends Controller
{
    function index(){
        
        return view('documentaciones.index');
    }

    function actas(){ 
        $documentaiones = Documentacion::all();
        
        
        return view('documentaciones.acta',compact('documentaiones'));
    }

    function documento(){ 
        $documentaiones = Documentacion::all();
        return view('documentaciones.documento',compact('documentaiones'));
    }
    function formulario(){ 
        $documentaiones = Documentacion::all();
        return view('documentaciones.formulario',compact('documentaiones'));
    }
    function modelo(){  
        $documentaiones = Documentacion::all();
        return view('documentaciones.modelo',compact('documentaiones'));
    }
    function eliminar_pdf($data){  
        $dato = json_decode($data, true); 

        //    $rol = [];  
        //    $rol['nombre'] = $dato["Nombre"];
        dd($dato);
        // Storage::delete(['file1.jpg', 'file2.jpg']);
        // return view('documentaciones.otro');
    }
}
