<?php

namespace App\Http\Controllers\Alumno\Entrevista_fresca;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DatosAdicionales;

class DatosAdicionalesController extends Controller
{
    public function create()
    {
    	return view('alumno.entrevista_fresca.datos_adicionales');
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
            'r20_1' => 'required',
            'r20_2' => 'required',
            'r20_3' => 'required',
            'r20_4' => 'required',
            'r20_5' => 'required',
            'r20_6' => 'required',
            'r20_7' => 'required',
            'r20_8' => 'required',
            'r20_9' => 'required',
            'r20_10' => 'required',
            'r20_11' => 'required',
            'r20_12' => 'required',
            'r20_13' => 'required',
            'r20_14' => 'required',
            'r20_15' => 'required',
            'r20_16' => 'required',
            'r20_17' => 'required',
            'r20_18' => 'required',
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
            'respuesta9.required' => 'Debes de agregar una respuesta',
            'respuesta10.required' => 'Debes de agregar una respuesta',
            'respuesta11.required' => 'Debes de agregar una respuesta',
            'respuesta12.required' => 'Debes de agregar una respuesta',
            'respuesta13.required' => 'Debes de agregar una respuesta',
            'respuesta14.required' => 'Debes de agregar una respuesta',            
            'respuesta15.required' => 'Debes de agregar una respuesta',            
            'respuesta16.required' => 'Debes de agregar una respuesta',            
            'respuesta17.required' => 'Debes de agregar una respuesta',            
            'respuesta18.required' => 'Debes de agregar una respuesta',
            'respuesta19.required' => 'Debes de agregar una respuesta',
            'r20_1.required' => 'Selecciona una opción',
            'r20_2.required' => 'Selecciona una opción',
            'r20_3.required' => 'Selecciona una opción',
            'r20_4.required' => 'Selecciona una opción',
            'r20_5.required' => 'Selecciona una opción',
            'r20_6.required' => 'Selecciona una opción',
            'r20_7.required' => 'Selecciona una opción',
            'r20_8.required' => 'Selecciona una opción',
            'r20_9.required' => 'Selecciona una opción',
            'r20_10.required' => 'Selecciona una opción',
            'r20_11.required' => 'Selecciona una opción',
            'r20_12.required' => 'Selecciona una opción',
            'r20_13.required' => 'Selecciona una opción',
            'r20_14.required' => 'Selecciona una opción',
            'r20_15.required' => 'Selecciona una opción',
            'r20_16.required' => 'Selecciona una opción',
            'r20_17.required' => 'Selecciona una opción',
            'r20_18.required' => 'Selecciona una opción',
        ];
            $this->validate($request,$rules,$message);
    		$datos = new DatosAdicionales;
    		$datos->entrevista_id = auth()->user()->entrevista_fresca->id;            
            $datos->respuesta1 = $request->input('respuesta1');
            $datos->r1 = $request->input('r1');
            $datos->respuesta2 = $request->input('respuesta2');
            $datos->r2 = $request->input('r2');
            $datos->respuesta3 = $request->input('respuesta3');
            $datos->r3 = $request->input('r3');
            $datos->r3_2 = $request->input('r3_2');
            $datos->respuesta4 = $request->input('respuesta4');
            $datos->r4 = $request->input('r4');
            $datos->respuesta5 = $request->input('respuesta5');
            $datos->r5 = $request->input('r5');
            $datos->respuesta6 = $request->input('respuesta6');
            $datos->respuesta7 = $request->input('respuesta7');
            $datos->respuesta8 = $request->input('respuesta8');
            $datos->respuesta9 = $request->input('respuesta9');
            $datos->respuesta10 = $request->input('respuesta10');
            $datos->respuesta11 = $request->input('respuesta11');
            $datos->respuesta12 = $request->input('respuesta12');
            $datos->respuesta13 = $request->input('respuesta13');
            $datos->respuesta14 = $request->input('respuesta14');
            $datos->r14 = $request->input('r14');
            $datos->respuesta15 = $request->input('respuesta15');
            $datos->r15 = $request->input('r15');
            $datos->respuesta16 = $request->input('respuesta16');
            $datos->r16 = $request->input('r16');
            $datos->respuesta17 = $request->input('respuesta17');
            $datos->r17 = $request->input('r17');
            $datos->r17_2 = $request->input('r17_2');
            $datos->respuesta18 = $request->input('respuesta18');
            $datos->respuesta19 = $request->input('respuesta19');            
            $datos->r20_1 = $request->input('r20_1');
            $datos->r20_2 = $request->input('r20_2');
            $datos->r20_3 = $request->input('r20_3');
            $datos->r20_4 = $request->input('r20_4');
            $datos->r20_5 = $request->input('r20_5');
            $datos->r20_6 = $request->input('r20_6');
            $datos->r20_7 = $request->input('r20_7');
            $datos->r20_8 = $request->input('r20_8');
            $datos->r20_9 = $request->input('r20_9');
            $datos->r20_10 = $request->input('r20_10');
            $datos->r20_11 = $request->input('r20_11');
            $datos->r20_12 = $request->input('r20_12');
            $datos->r20_13 = $request->input('r20_13');
            $datos->r20_14 = $request->input('r20_14');
            $datos->r20_15 = $request->input('r20_15');
            $datos->r20_16 = $request->input('r20_16');
            $datos->r20_17 = $request->input('r20_17');
            $datos->r20_18 = $request->input('r20_18'); 
            $datos->save();
            $mensaje = 'Has realizado la encuesta "Datos Adicionales"';       
            return redirect('/alumno/entrevista')->with(compact('mensaje'));
    }
}
