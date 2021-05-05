<?php

namespace App\Http\Controllers\Alumno\Entrevista_fresca;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DatosAcademicos;
use Auth;

class DatosAcademicosController extends Controller
{
    public function create()
    {
    	return view('alumno.entrevista_fresca.datos_academicos');
    }

     public function store(Request $request)
    {
    	$rules = [
            'respuesta1' => 'required',
            'respuesta2' => 'required',
    		'r2' => 'required',
            'respuesta3' => 'required',
            'respuesta4' => 'required',
            'r4' => 'required',
    	];

    	$message = [
            'respuesta1.required' => 'Debes de agregar una respuesta',
            'respuesta2.required' => 'Debes de agregar una respuesta',
    		'r2.required' => 'Debes de escribir un porque',
            'respuesta3.required' => 'Debes de agregar una respuesta',
            'respuesta4.required' => 'Debes de agregar una respuesta',
            'r4.required' => 'Debes de escribir un porque',
    	];

    	$this->validate($request,$rules,$message);
        //dd($request->all());
        $datos_academicos = new DatosAcademicos;
        $datos_academicos->entrevista_id = auth()->user()->entrevista_fresca->id;
        $datos_academicos->respuesta1 = $request->input('respuesta1');        
        $datos_academicos->respuesta2 = $request->input('respuesta2');
        $datos_academicos->r2 = $request->input('r2');
        $datos_academicos->respuesta3 = $request->input('respuesta3');
        $datos_academicos->respuesta4 = $request->input('respuesta4');
        $datos_academicos->r4 = $request->input('r4');                     
        $datos_academicos->save();        
        if (Auth::user()->entrevista_fresca->datoFamiliar && Auth::user()->entrevista_fresca->datoAcademico && 
            Auth::user()->entrevista_fresca->habitoEstudio &&  Auth::user()->entrevista_fresca->otraActividad &&  
            Auth::user()->entrevista_fresca->datosAdicionales)
        {
            $entrevista_fresca = new EntrevistaAlumnoController();
            $entrevista_fresca->update();
            $mensaje = 'Has finalizado la encuesta "Entrevista fresca". Gracias por compartir esta información eres lo más importante para nosotros.';      
            return redirect('/alumno/encuestas')->with(compact('mensaje'));
        }else{
            $mensaje = 'Has finalizado los Datos Academicos';
            return redirect('/alumno/entrevista')->with(compact('mensaje'));
        }        
    }
}
