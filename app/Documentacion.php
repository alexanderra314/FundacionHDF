<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documentacion extends Model
{
    protected $table = 'documentos';
    protected $fillable = [
        'id','carpeta', 'nombre','estado'
    ];
}
