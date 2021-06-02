<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Grupo extends Model
{
	protected $table = 'grupos';
    //Relacion entre alumno y grupo
    //Un grupo puede tener varios alumnos

	public function getNombreCompletoAttribute()
	{
		return "$this->name $this->grado $this->grupo $this->semestre";
	}

	public function alumnos()
	{	
		return $this->hasMany(Alumno::class);
	}
	
	public function materias()
    {
    	return $this->belongsToMany(Materia::class,'asignadas')->withTimestamps();
        //return $this->belongsToMany(Materia::class,'asignadas','grupo_id')->withTimestamps();
    }   
}
