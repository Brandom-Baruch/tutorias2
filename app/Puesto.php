<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{
	protected $table = 'puestos';
  
    public function docentes()
    {											   //Tabla intermedia
        return $this->belongsToMany(Docente::class,'puesto_asignados')->withTimestamps();
    }

}
