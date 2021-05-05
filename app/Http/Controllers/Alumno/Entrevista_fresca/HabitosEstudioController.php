<?php

namespace App\Http\Controllers\Alumno\Entrevista_fresca;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\HabitosEstudio;
use Auth;

class HabitosEstudioController extends Controller
{
	public function create()
	{		
		return view('alumno.entrevista_fresca.habitos_estudio');
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
			'respuesta8' => 'required',			
			'r9_1' => 'required',
			'r9_2' => 'required',
			'r9_3' => 'required',
			'r9_4' => 'required',
			'r9_5' => 'required',
			'r9_6' => 'required',
			'r9_7' => 'required',
		];

		$message = [
			'respuesta1.required' => 'Debes de agregar una respuesta',
			'respuesta2.required' => 'Debes de agregar una respuesta',
			'respuesta3.required' => 'Debes de agregar una respuesta',
			'respuesta4.required' => 'Debes de agregar una respuesta',
			'respuesta5.required' => 'Debes de agregar una respuesta',			
			'respuesta6.required' => 'Debes de agregar una respuesta',			
			'respuesta7.required' => 'Debes de agregar una respuesta',			
			'respuesta8.required' => 'Debes de agregar una respuesta',			
			'r9_1.required' => 'Selecciona una opción',
			'r9_2.required' => 'Selecciona una opción',
			'r9_3.required' => 'Selecciona una opción',
			'r9_4.required' => 'Selecciona una opción',
			'r9_5.required' => 'Selecciona una opción',
			'r9_6.required' => 'Selecciona una opción',
			'r9_7.required' => 'Selecciona una opción',
		];
		
		$this->validate($request,$rules,$message);

		$habitos = new HabitosEstudio;

		$habitos->entrevista_id = auth()->user()->entrevista_fresca->id;		
		$habitos->respuesta1 = $request->input('respuesta1');           
		$habitos->respuesta2 = $request->input('respuesta2');
		$habitos->respuesta3 = $request->input('respuesta3');            
		$habitos->respuesta4 = $request->input('respuesta4');
		$habitos->respuesta5 = $request->input('respuesta5');
		$habitos->r5 = $request->input('r5');
		$habitos->respuesta6 = $request->input('respuesta6');
		$habitos->r6 = $request->input('r6');
		$habitos->respuesta7 = $request->input('respuesta7'); 
		$habitos->r7 = $request->input('r7');
		$habitos->respuesta8 = $request->input('respuesta8');
		$habitos->r8 = $request->input('r8');		
		$habitos->r9_1 = $request->input('r9_1');
		$habitos->r9_2 = $request->input('r9_2');
		$habitos->r9_3 = $request->input('r9_3');
		$habitos->r9_4 = $request->input('r9_4');
		$habitos->r9_5 = $request->input('r9_5');
		$habitos->r9_6 = $request->input('r9_6');
		$habitos->r9_7 = $request->input('r9_7');
		$habitos->save();
		if (Auth::user()->entrevista_fresca->datoFamiliar && Auth::user()->entrevista_fresca->datoAcademico && 
            Auth::user()->entrevista_fresca->habitoEstudio &&  Auth::user()->entrevista_fresca->otraActividad &&  
            Auth::user()->entrevista_fresca->datosAdicionales)
        {
            $entrevista_fresca = new EntrevistaAlumnoController();
            $entrevista_fresca->update();
            $mensaje = 'Has finalizado la encuesta "Entrevista fresca". Gracias por compartir esta información eres lo más importante para nosotros.';      
            return redirect('/alumno/encuestas')->with(compact('mensaje'));
        }else{
        	$mensaje = 'Has finalizado los Habitos de estudio';
        	return redirect('/alumno/entrevista')->with(compact('mensaje'));
        }		
	}
}
