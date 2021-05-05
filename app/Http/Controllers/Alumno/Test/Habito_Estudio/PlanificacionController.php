<?php

namespace App\Http\Controllers\Alumno\Test\Habito_Estudio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Planificacion;
use App\Http\Controllers\Alumno\Test\TestController;
use Auth;

class PlanificacionController extends Controller
{
    public function create()
    {
    	return view('alumno.test.habitos_estudio.planificacion');
    }

    public function store(Request $request)
    {
    	$planificacion = new Planificacion;

        $rules = [
            'respuesta1' => 'required',
            'respuesta2' => 'required',
            'respuesta3' => 'required',
            'respuesta4' => 'required',
            'respuesta5' => 'required',
        ];

        $message = [
            'respuesta1.required' => 'Debes de seleccionar una opción',
            'respuesta2.required' => 'Debes de seleccionar una opción',
            'respuesta3.required' => 'Debes de seleccionar una opción',
            'respuesta4.required' => 'Debes de seleccionar una opción',
            'respuesta5.required' => 'Debes de seleccionar una opción',
        ];

        $this->validate($request,$rules,$message);
        //dd($request->all());
    	$planificacion->habito_id = auth()->user()->test->test_habito_estudio->id;        
        $planificacion->respuesta1 = $request->input('respuesta1');
        $planificacion->respuesta2 = $request->input('respuesta2');
        $planificacion->respuesta3 = $request->input('respuesta3');
        $planificacion->respuesta4 = $request->input('respuesta4');
        $planificacion->respuesta5 = $request->input('respuesta5');    
        $planificacion->save();

                       
        if (Auth::user()->test->test_habito_estudio->organizacion_tiempo && 
            Auth::user()->test->test_habito_estudio->planificacion && 
            Auth::user()->test->test_habito_estudio->estrategias_aprendizaje) {
            
            $habitos_estudio = new HabitoEstudioController();
            $habitos_estudio->update();                      
            
            if (Auth::user()->test->conociendo_estilo_aprendizaje && 
                Auth::user()->test->encontrar_estilo_aprendizaje && 
                Auth::user()->test->test_habito_estudio->organizacion_tiempo && 
                Auth::user()->test->test_habito_estudio->planificacion && 
                Auth::user()->test->test_habito_estudio->estrategias_aprendizaje)
            {
                $test = new TestController();
                $test->update();
                $mensaje = 'Has Finalizado el Test de manera exitosa. Muchas gracias';
                return redirect('/alumno/encuestas')->with(compact('mensaje'));
            }else
            {
                $mensaje = 'Has finalizado la seccion de "Habitos de estudio" exitosamente';
                return redirect('/alumno/test')->with(compact('mensaje'));                          
            }            
        }
        else
        {
            $mensaje = 'Has realizado el test "Planificación" exitosamente';
            return redirect('/alumno/test/habitos_estudio')->with(compact('mensaje'));
        }               
    }
}
