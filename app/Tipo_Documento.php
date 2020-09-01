<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_Documento extends Model
{
    protected $table = 'tipos_documentos';
    protected $fillable = [
        'id','nombre','siglas'
    ];
}
