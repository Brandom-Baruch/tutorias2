<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentoPadre extends Model
{
   protected  $table  = 'documentos_padre';

    public function padre()
    {
    	return $this->belongsTo(Padre_familia::class);
    }  

    public function getUrlAttribute()
    {    	
        return '/archivos/padre_familia/'.$this->nombre_archivo;
    }  
}
