<?php

namespace App\Http\Controllers\Alumno\Test\Habito_Estudio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Estrategias_Aprendizaje;

class EstrategiaAprendizajeController extends Controller
{
    public function create()
    {    	    	
    	//dd(auth()->user()->test->test_habito_estudio->id);
    	return view('alumno.test.habitos_estudio.estrategias_aprendizaje');
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
            'respuesta10' => 'required',
            'respuesta11' => 'required',
            'respuesta12' => 'required',
            'respuesta13' => 'required',
            'respuesta14' => 'required',
            'respuesta15' => 'required',
            'respuesta16' => 'required',
            'respuesta17' => 'required',
        ];

        $message = [
            'respuesta1.required' => 'Debes de seleccionar una opción',
            'respuesta2.required' => 'Debes de seleccionar una opción',
            'respuesta3.required' => 'Debes de seleccionar una opción',
            'respuesta4.required' => 'Debes de seleccionar una opción',
            'respuesta5.required' => 'Debes de seleccionar una opción',
            'respuesta6.required' => 'Debes de seleccionar una opción',
            'respuesta7.required' => 'Debes de seleccionar una opción',
            'respuesta8.required' => 'Debes de seleccionar una opción',
            'respuesta9.required' => 'Debes de seleccionar una opción',
            'respuesta10.required' => 'Debes de seleccionar una opción',
            'respuesta11.required' => 'Debes de seleccionar una opción',
            'respuesta12.required' => 'Debes de seleccionar una opción',
            'respuesta13.required' => 'Debes de seleccionar una opción',
            'respuesta14.required' => 'Debes de seleccionar una opción',
            'respuesta15.required' => 'Debes de seleccionar una opción',
            'respuesta16.required' => 'Debes de seleccionar una opción',
            'respuesta17.required' => 'Debes de seleccionar una opción',
        ];

        $this->validate($request,$rules,$message);
        //dd($request->all());
    	$estrategias_aprendizaje = new Estrategias_Aprendizaje;
    	 
        $estrategias_aprendizaje->habito_id = auth()->user()->test->test_habito_estudio->id;	
        $estrategias_aprendizaje->respuesta1 = $request->input('respuesta1');
        $estrategias_aprendizaje->respuesta2 = $request->input('respuesta2');
        $estrategias_aprendizaje->respuesta3 = $request->input('respuesta3');
        $estrategias_aprendizaje->respuesta4 = $request->input('respuesta4');
        $estrategias_aprendizaje->respuesta5 = $request->input('respuesta5');
        $estrategias_aprendizaje->respuesta6 = $request->input('respuesta6');
        $estrategias_aprendizaje->respuesta7 = $request->input('respuesta7');
        $estrategias_aprendizaje->respuesta8 = $request->input('respuesta8');
        $estrategias_aprendizaje->respuesta9 = $request->input('respuesta9');
        $estrategias_aprendizaje->respuesta10 = $request->input('respuesta10');
        $estrategias_aprendizaje->respuesta11 = $request->input('respuesta11');
        $estrategias_aprendizaje->respuesta12 = $request->input('respuesta12');
        $estrategias_aprendizaje->respuesta13 = $request->input('respuesta13');
        $estrategias_aprendizaje->respuesta14 = $request->input('respuesta14');
        $estrategias_aprendizaje->respuesta15 = $request->input('respuesta15');
        $estrategias_aprendizaje->respuesta16 = $request->input('respuesta16');
        $estrategias_aprendizaje->respuesta17 = $request->input('respuesta17');
		$estrategias_aprendizaje->save();
		$mensaje = 'Has realizado el test de "Estrategias de aprendizaje" exitosamente';
		return redirect('/alumno/test/habitos_estudio')->with(compact('mensaje'));
    }
}
