<?php

namespace App\Http\Controllers\Alumno\Cuestionario_anexos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Nivel_Empatia;
use Auth;

class NivelesEmpatiaController extends Controller
{
    public function create()
    {
    	return view('alumno.cuestionario_anexos.niveles_empatia');
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
            'respuesta9' => 'required',
        ];

        $message = [
            'respuesta1.required' => 'Debes de selecionar una respuesta',
            'respuesta2.required' => 'Debes de selecionar una respuesta',
            'respuesta3.required' => 'Debes de selecionar una respuesta',
            'respuesta4.required' => 'Debes de selecionar una respuesta',
            'respuesta5.required' => 'Debes de selecionar una respuesta',
            'respuesta6.required' => 'Debes de selecionar una respuesta',
            'respuesta7.required' => 'Debes de selecionar una respuesta',
            'respuesta8.required' => 'Debes de selecionar una respuesta',
            'respuesta9.required' => 'Debes de selecionar una respuesta',
        ];

        $this->validate($request,$rules,$message);
        //dd($request->all());
    	$niveles_empatia = new Nivel_Empatia;    	
		$niveles_empatia->cuestionario_id = auth()->user()->cuestionario_anexo->id;            
        $niveles_empatia->respuesta1 = $request->input('respuesta1');
        $niveles_empatia->respuesta2 = $request->input('respuesta2');
        $niveles_empatia->respuesta3 = $request->input('respuesta3');
        $niveles_empatia->respuesta4 = $request->input('respuesta4');
        $niveles_empatia->respuesta5 = $request->input('respuesta5');
        $niveles_empatia->respuesta6 = $request->input('respuesta6');
        $niveles_empatia->respuesta7 = $request->input('respuesta7');
        $niveles_empatia->respuesta8 = $request->input('respuesta8');
        $niveles_empatia->respuesta9 = $request->input('respuesta9');  
        $niveles_empatia->save();
        if (Auth::user()->cuestionario_anexo->atribucion && Auth::user()->cuestionario_anexo->nivel_empatia && 
            Auth::user()->cuestionario_anexo->tipo_mentalidad)
        {
            $cuestionario_anexo = new CuestionarioAlumnoController(); // creamos una instancial del controlador
            $cuestionario_anexo->update(); // Llamamos al metodo update
            $mensaje = 'Has finalizalo el cuestionario. Gracias por compartir esta información eres lo más 
                        importante para nosotros.';
            return redirect('/alumno/encuestas')->with(compact('mensaje'));
        }else{
            $mensaje = 'Has realizado el cuestionario "Niveles de empatía" exitosamente';
            return redirect('alumno/cuestionario')->with(compact('mensaje'));
        }        
    }
}
