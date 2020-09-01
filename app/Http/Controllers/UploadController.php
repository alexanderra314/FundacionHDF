<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\File;
use App\Documentacion;

class UploadController extends Controller
{
    public function subir_archivo_acta(Request $request)
    {

            $file = $request->file('Archivo');
            $nombre = $file->getClientOriginalName();
            $carpeta = 'actas'; 
            $documento=[];
            $documento['carpeta'] = $carpeta;
            $documento['nombre'] = $nombre;
            $documento['estado'] = '1';
            $ok = Documentacion::create($documento);
            if ($ok) { 
               Storage::putFileAs($carpeta, $file, $nombre);
               return back() 
                 ->with("alert", "Se Agrego el archivo Correctamente")
                 ->with("tipo", "success");
            } else {
                return back() 
                 ->with("alert", "Error al subir el archivo Correctamente")
                 ->with("tipo", "danger");
            }
             
            // dd($nombre); 
   
   }

   public function subir_archivo_documento(Request $request)
   {

           $file = $request->file('Archivo');
           $nombre = $file->getClientOriginalName();
           $carpeta = 'documento'; 
           $documento=[];
           $documento['carpeta'] = $carpeta;
           $documento['nombre'] = $nombre;
           $documento['estado'] = '1';
           $ok = Documentacion::create($documento);
           if ($ok) { 
              Storage::putFileAs($carpeta, $file, $nombre);
              return back() 
                ->with("alert", "Se Agrego el archivo Correctamente")
                ->with("tipo", "success");
           } else {
               return back() 
                ->with("alert", "Error al subir el archivo Correctamente")
                ->with("tipo", "danger");
           }
            
           // dd($nombre); 
  
  }

  public function subir_archivo_formulario(Request $request)
   {

           $file = $request->file('Archivo');
           $nombre = $file->getClientOriginalName();
           $carpeta = 'formulario'; 
           $documento=[];
           $documento['carpeta'] = $carpeta;
           $documento['nombre'] = $nombre;
           $documento['estado'] = '1';
           $ok = Documentacion::create($documento);
           if ($ok) { 
              Storage::putFileAs($carpeta, $file, $nombre);
              return back() 
                ->with("alert", "Se Agrego el archivo Correctamente")
                ->with("tipo", "success");
           } else {
               return back() 
                ->with("alert", "Error al subir el archivo Correctamente")
                ->with("tipo", "danger");
           }
            
           // dd($nombre); 
  
  }
  public function subir_archivo_modelo(Request $request)
   {

           $file = $request->file('Archivo');
           $nombre = $file->getClientOriginalName();
           $carpeta = 'modelo'; 
           $documento=[];
           $documento['carpeta'] = $carpeta;
           $documento['nombre'] = $nombre;
           $documento['estado'] = '1';
           $ok = Documentacion::create($documento);
           if ($ok) { 
              Storage::putFileAs($carpeta, $file, $nombre);
              return back() 
                ->with("alert", "Se Agrego el archivo Correctamente")
                ->with("tipo", "success");
           } else {
               return back() 
                ->with("alert", "Error al subir el archivo Correctamente")
                ->with("tipo", "danger");
           }
            
           // dd($nombre); 
  
  }

}
