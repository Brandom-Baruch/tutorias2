<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PuestoAsignado extends Model
{ 
	protected $table = 'puesto_asignados';

	/*public function docente()
	{
		return $this->belongsTo(Docente::class,'id','docente_id');
	}

	public function puesto()
	{
		return $this->belongsTo(Docente::class,'id','puesto_id');
	}*/
}
