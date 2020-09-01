<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $fillable = [
        'tipo_documento_id','identificacion', 'primer_nombre','segundo_nombre','primer_apellido','segundo_apellido','fecha_nacimiento','direccion','barrio','ciudad','departamento','telefono','fijo','email','objecto','rol_id','estado',
    ];

    public function rol()
    {
        return $this->belongsTo('App\Rol', 'rol_id');
    }
    public function Tipo()
    {
        return $this->belongsTo('App\Tipo_Documento', 'tipo_documento_id');
    }
    public function User()
    {
        return $this->hasOne('App\User');
    }
}
