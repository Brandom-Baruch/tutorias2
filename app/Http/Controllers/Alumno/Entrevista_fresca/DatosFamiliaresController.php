<?php

namespace App\Http\Controllers\Alumno\Entrevista_fresca;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DatosFamiliares;
use Auth;

class DatosFamiliaresController extends Controller
{
    
     public function __construct()
    {
        $this->middleware('auth:alumno');
    }


    public function create()
    {
        return view('alumno.entrevista_fresca.datos_familiares');
    }

    public function store(Request $request)
    {
        $rules = [
            'respuesta1' => 'required',        
            'respuesta2' => 'required',
            'respuesta3' => 'required',            
            'respuesta4' => 'required',
            'respuesta5' => 'required',            
            'respuesta6' => 'required',
            'respuesta7' => 'required',
        ];

        $message = [
            'respuesta1.required' => 'Debes de colocar una respuesta',        
            'respuesta2.required' => 'Debes de colocar una respuesta',
            'respuesta3.required' => 'Debes de colocar una respuesta',            
            'respuesta4.required' => 'Debes de colocar una respuesta',
            'respuesta5.required' => 'Debes de colocar una respuesta',            
            'respuesta6.required' => 'Debes de colocar una respuesta',
            'respuesta7.required' => 'Debes de colocar una respuesta',
        ];
            $this->validate($request,$rules,$message);
        //dd($request->all());
        $datos_familiares = new DatosFamiliares;
        $datos_familiares->entrevista_id = auth()->user()->entrevista_fresca->id;
        $datos_familiares->respuesta1 = $request->input('respuesta1');
        $datos_familiares->r1 = $request->input('r1');        
        $datos_familiares->respuesta2 = $request->input('respuesta2');
        $datos_familiares->respuesta3 = $request->input('respuesta3');
        $datos_familiares->r3 = $request->input('r3');
        $datos_familiares->respuesta4 = $request->input('respuesta4');
        $datos_familiares->respuesta5 = $request->input('respuesta5');
        $datos_familiares->r5 = $request->input('r5');
        $datos_familiares->respuesta6 = $request->input('respuesta6');
        $datos_familiares->respuesta7 = $request->input('respuesta7');                
        $datos_familiares->save();        
        if (Auth::user()->entrevista_fresca->datoFamiliar && Auth::user()->entrevista_fresca->datoAcademico && 
            Auth::user()->entrevista_fresca->habitoEstudio &&  Auth::user()->entrevista_fresca->otraActividad &&  
            Auth::user()->entrevista_fresca->datosAdicionales)
        {
                $entrevista_fresca = new EntrevistaAlumnoController();
                $entrevista_fresca->update();
                $mensaje = 'Has finalizado la encuesta "Entrevista fresca". Gracias por compartir esta información eres lo más importante para nosotros.';      
                return redirect('/alumno/encuestas')->with(compact('mensaje'));
                
        }else{
            $mensaje = 'Has finalizado los Datos Familiares';
            return redirect('/alumno/entrevista')->with(compact('mensaje'));
        }
    }  
}
