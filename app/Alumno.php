<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
use App\Notifications\AlumnoResetPasswordNotification;

class Alumno extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'nia'; //Al utilizar find, por defecto laravel colocara id 
    
    protected $guard = 'alumno';
    
    protected $fillable = ['nia','name', 'email', 'password',];

    protected $table = 'alumnos';

    //Llamar a la notificacion del correo 

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AlumnoResetPasswordNotification($token));
    }

    public function getNombreCompletoAttribute()
    {
        return "$this->name $this->apellidoP $this->apellidoM"; //Mostramos el nombre completo del alumno
    }

    //Relacion entre grupo y alumno
    //Varios alumnos pueden tener un grupo
    public function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }

    public function getGrupoNombreAttribute() //Campo calculado
    {
            //Si existe el grupo del alumno
        if($this->grupo){
                //Devolvemos el grupo donde pertenece el alumno
            return $this->grupo->name;
        }else{
                //Si no existe el grupo, colocamos como "SIN GRUPO"
            return 'Sin grupo';
        }
    }

    public function padres()
    {
        return $this->belongsToMany(Padre_familia::class, 'parentezcos','alumno_id','padre_id')->withPivot('parentezco')->withTimestamps();
    }

    public function domicilios()
    {
        return $this->belongsToMany(Domicilio::class,'_b__domicilio','alumno_id','nia')->withTimestamps();
    }

    public function entrevista_fresca()
    {
        return $this->belongsTo(Entrevista_Fresca_Alumno::class,'nia','alumno_id');
    }
      
    public function cuestionario_anexo()
    {
        return $this->belongsTo(Cuestionario_Anexos::class,'nia','alumno_id');
    }       
    public function test()
    {
        return $this->belongsTo(Test::class,'nia','alumno_id');
    }

    public function atencion_individual()
    {
        return $this->belongsTo(Atencion_Individualizada::class ,'nia','alumno_id');
    }
    public function perfil_academico()
    {
        return $this->belongsTo(Perfil_Academico_Alumno::class,'nia','alumno_id');
    }
}
