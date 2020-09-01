<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario; 

class OrganigramaController extends Controller
{
    function index(){
        $usuarios = Usuario::all();
        return view('organigramas.index', compact('usuarios'));
    }
}
