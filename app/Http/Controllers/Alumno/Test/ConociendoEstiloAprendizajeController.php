<?php

namespace App\Http\Controllers\Alumno\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Conociendo_Estilo_Aprendizaje;

class ConociendoEstiloAprendizajeController extends Controller
{
    public function create()
    {
    	return view('alumno.test.conociendo_estilo_aprendizaje');
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
            'respuesta18' => 'required',
            'respuesta19' => 'required',
            'respuesta20' => 'required',
            'respuesta21' => 'required',
            'respuesta22' => 'required',
            'respuesta23' => 'required',
            'respuesta24' => 'required',
            'respuesta25' => 'required',
            'respuesta26' => 'required',
            'respuesta27' => 'required',
            'respuesta28' => 'required',
            'respuesta29' => 'required',
            'respuesta30' => 'required',
            'respuesta31' => 'required',
            'respuesta32' => 'required',
            'respuesta33' => 'required',
            'respuesta34' => 'required',
            'respuesta35' => 'required',
            'respuesta36' => 'required',

        ];

        $message = [
            'respuesta1.required' => 'Selecciona una opción',
            'respuesta2.required' => 'Selecciona una opción',
            'respuesta3.required' => 'Selecciona una opción',
            'respuesta4.required' => 'Selecciona una opción',
            'respuesta5.required' => 'Selecciona una opción',
            'respuesta6.required' => 'Selecciona una opción',
            'respuesta7.required' => 'Selecciona una opción',
            'respuesta8.required' => 'Selecciona una opción',
            'respuesta9.required' => 'Selecciona una opción',
            'respuesta10.required' => 'Selecciona una opción',
            'respuesta11.required' => 'Selecciona una opción',
            'respuesta12.required' => 'Selecciona una opción',
            'respuesta13.required' => 'Selecciona una opción',
            'respuesta14.required' => 'Selecciona una opción',
            'respuesta15.required' => 'Selecciona una opción',
            'respuesta16.required' => 'Selecciona una opción',
            'respuesta17.required' => 'Selecciona una opción',
            'respuesta18.required' => 'Selecciona una opción',
            'respuesta19.required' => 'Selecciona una opción',
            'respuesta20.required' => 'Selecciona una opción',
            'respuesta21.required' => 'Selecciona una opción',
            'respuesta22.required' => 'Selecciona una opción',
            'respuesta23.required' => 'Selecciona una opción',
            'respuesta24.required' => 'Selecciona una opción',
            'respuesta25.required' => 'Selecciona una opción',
            'respuesta26.required' => 'Selecciona una opción',
            'respuesta27.required' => 'Selecciona una opción',
            'respuesta28.required' => 'Selecciona una opción',
            'respuesta29.required' => 'Selecciona una opción',
            'respuesta30.required' => 'Selecciona una opción',
            'respuesta31.required' => 'Selecciona una opción',
            'respuesta32.required' => 'Selecciona una opción',
            'respuesta33.required' => 'Selecciona una opción',
            'respuesta34.required' => 'Selecciona una opción',
            'respuesta35.required' => 'Selecciona una opción',
            'respuesta36.required' => 'Selecciona una opción',
        ];

        $this->validate($request,$rules,$message);
        //dd($request->all());

    	$conociendo_estilo_aprendizaje = new Conociendo_Estilo_Aprendizaje;
        $conociendo_estilo_aprendizaje->test_id = auth()->user()->test->id;
		$conociendo_estilo_aprendizaje->respuesta1 = $request->input('respuesta1');
        $conociendo_estilo_aprendizaje->respuesta2 = $request->input('respuesta2');
        $conociendo_estilo_aprendizaje->respuesta3 = $request->input('respuesta3');
        $conociendo_estilo_aprendizaje->respuesta4 = $request->input('respuesta4');
        $conociendo_estilo_aprendizaje->respuesta5 = $request->input('respuesta5');
        $conociendo_estilo_aprendizaje->respuesta6 = $request->input('respuesta6');
        $conociendo_estilo_aprendizaje->respuesta7 = $request->input('respuesta7');
        $conociendo_estilo_aprendizaje->respuesta8 = $request->input('respuesta8');
        $conociendo_estilo_aprendizaje->respuesta9 = $request->input('respuesta9');
        $conociendo_estilo_aprendizaje->respuesta10 = $request->input('respuesta10');
        $conociendo_estilo_aprendizaje->respuesta11 = $request->input('respuesta11');
        $conociendo_estilo_aprendizaje->respuesta12 = $request->input('respuesta12');
        $conociendo_estilo_aprendizaje->respuesta13 = $request->input('respuesta13');
        $conociendo_estilo_aprendizaje->respuesta14 = $request->input('respuesta14');
        $conociendo_estilo_aprendizaje->respuesta15 = $request->input('respuesta15');
        $conociendo_estilo_aprendizaje->respuesta16 = $request->input('respuesta16');
        $conociendo_estilo_aprendizaje->respuesta17 = $request->input('respuesta17');
        $conociendo_estilo_aprendizaje->respuesta18 = $request->input('respuesta18');
        $conociendo_estilo_aprendizaje->respuesta19 = $request->input('respuesta19');
        $conociendo_estilo_aprendizaje->respuesta20 = $request->input('respuesta20');
        $conociendo_estilo_aprendizaje->respuesta21 = $request->input('respuesta21');
        $conociendo_estilo_aprendizaje->respuesta22 = $request->input('respuesta22');
        $conociendo_estilo_aprendizaje->respuesta23 = $request->input('respuesta23');
        $conociendo_estilo_aprendizaje->respuesta24 = $request->input('respuesta24');
        $conociendo_estilo_aprendizaje->respuesta25 = $request->input('respuesta25');
        $conociendo_estilo_aprendizaje->respuesta26 = $request->input('respuesta26');
        $conociendo_estilo_aprendizaje->respuesta27 = $request->input('respuesta27');
        $conociendo_estilo_aprendizaje->respuesta28 = $request->input('respuesta28');
        $conociendo_estilo_aprendizaje->respuesta29 = $request->input('respuesta29');
        $conociendo_estilo_aprendizaje->respuesta30 = $request->input('respuesta30');
        $conociendo_estilo_aprendizaje->respuesta31 = $request->input('respuesta31');
        $conociendo_estilo_aprendizaje->respuesta32 = $request->input('respuesta32');
        $conociendo_estilo_aprendizaje->respuesta33 = $request->input('respuesta33');
        $conociendo_estilo_aprendizaje->respuesta34 = $request->input('respuesta34');
        $conociendo_estilo_aprendizaje->respuesta35 = $request->input('respuesta35');
        $conociendo_estilo_aprendizaje->respuesta36 = $request->input('respuesta36');
        $conociendo_estilo_aprendizaje->save();
        $mensaje = 'Has realizado el test "Conociendo los estilos de aprendizaje de los tutorados" exitosamente';
        return redirect('/alumno/test')->with(compact('mensaje'));
    }
}
