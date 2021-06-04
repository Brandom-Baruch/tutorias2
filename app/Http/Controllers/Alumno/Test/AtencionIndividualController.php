<?php

namespace App\Http\Controllers\Alumno\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Materia;
use App\Grupo;
use Carbon\Carbon;
use App\Atencion_Individualizada;
use Auth;

class AtencionIndividualController extends Controller
{
    public function create()
    {	    	    	    	
    	$materias = Materia::where('name','like','%Tutorias%')->get();                
    	return view('alumno.test.atencion_individual')->with(compact('materias'));
    }

    public function store(Request $request)
    {
    	$atencion_individual = new Atencion_Individualizada;

        $atencion_individual->descripcion = 'Finalizo Test';
        $atencion_individual->fecha_aplicacion = Carbon::now();
        $atencion_individual->alumno_id = auth()->user()->nia;
		$atencion_individual->grupo = $request->input('grupo');                
    	$atencion_individual->nombre_docente = $request->input('docente_name');
        $atencion_individual->respuesta1 = $request->input('respuesta1');
        $atencion_individual->respuesta2 = $request->input('respuesta2');
        $atencion_individual->respuesta3 = $request->input('respuesta3');
        $atencion_individual->respuesta4 = $request->input('respuesta4');
        $atencion_individual->respuesta5 = $request->input('respuesta5');
        $atencion_individual->respuesta6 = $request->input('respuesta6');
        $atencion_individual->respuesta7 = $request->input('respuesta7');
        $atencion_individual->respuesta8 = $request->input('respuesta8');
        $atencion_individual->respuesta9 = $request->input('respuesta9');
        $atencion_individual->respuesta10 = $request->input('respuesta10');
        $atencion_individual->respuesta11 = $request->input('respuesta11');
        $atencion_individual->respuesta12 = $request->input('respuesta12');
        $atencion_individual->respuesta13 = $request->input('respuesta13');
        $atencion_individual->respuesta14 = $request->input('respuesta14');
        $atencion_individual->respuesta15 = $request->input('respuesta15');
        $atencion_individual->respuesta16 = $request->input('respuesta16');
        $atencion_individual->respuesta17 = $request->input('respuesta17');
        $atencion_individual->respuesta18 = $request->input('respuesta18');
        $atencion_individual->respuesta19 = $request->input('respuesta19');
        $atencion_individual->respuesta21 = $request->input('respuesta21');
        $atencion_individual->save();  


        if (Auth::user()->test->conociendo_estilo_aprendizaje && Auth::user()->test->encontrar_estilo_aprendizaje && 
            empty(Auth::user()->test->test_habito_estudio))
        {
            $test_habito_estudio = new HabitoEstudioController();
            $test_habito_estudio->inicio_habito_estudio();
            $mensaje = 'Por favor realiza las siguientes secciones';
            return redirect('alumno/test/habitos_estudio')->with(compact('mensaje'));
        }

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
        }
        else
        {
            $mensaje = 'Has finalizado el test de "Atención indivualizada" exitosamente';
            return redirect('/alumno/encuestas')->with(compact('mensaje'));
        }                         
    }
}
