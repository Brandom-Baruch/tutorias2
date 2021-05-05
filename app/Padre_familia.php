<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\PadreResetPasswordNotification;

class Padre_familia extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = "id";

    protected $guard = 'padre';
 
    protected $fillable = ['name', 'email', 'password',];

    protected $table = 'padre_familias';    

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new PadreResetPasswordNotification($token));
    }

    public function setCurpAttribute($value)
    {
        $this->attributes['curp'] = strtoupper($value);
    }

    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class, 'parentezcos','padre_id','alumno_id')->withPivot('parentezco')->withTimestamps();
    }

    public function domicilios()
    {
        return $this->belongsToMany(Domicilio::class,'_b__domicilio', 'padre_id')->withTimestamps();
    }

    public function entrevista()
    {
        return $this->belongsTo(Entrevista_Fresca_Padre::class,'id','padre_id');
    }

    public function documentos_padre()
    {
        return $this->HasMany(DocumentoPadre::class,'id','padre_id');
    }

    public function getNombreCompletoAttribute()
    {
        return "$this->name $this->apellidoP $this->apellidoM";
    }
}
