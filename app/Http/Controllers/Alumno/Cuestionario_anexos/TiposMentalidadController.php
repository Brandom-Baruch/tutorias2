<?php

namespace App\Http\Controllers\Alumno\Cuestionario_anexos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tipo_Mentalidad;
use Auth;


class TiposMentalidadController extends Controller
{
    public function create()
    {
    	return view('alumno.cuestionario_anexos.tipos_mentalidad');
    }

    public function store(Request $request)
    {
        $rules = [
            'respuesta1' => 'required',
            'respuesta2' => 'required',
            'respuesta3' => 'required',
            'respuesta4' => 'required',
            'respuesta5' => 'required',
            'r5' => 'required',
        ];

        $message = [
            'respuesta1.required' => 'Debes de agregar una opción',
            'respuesta2.required' => 'Debes de agregar una opción',
            'respuesta3.required' => 'Debes de agregar una opción',
            'respuesta4.required' => 'Debes de agregar una opción',
            'respuesta5.required' => 'Debes de agregar un número',            
            'r5.required' => 'Debes de agregar un número',            
        ];

        $this->validate($request,$rules,$message);
        //dd($request->all());
    	$mentalidad = new Tipo_Mentalidad;
    	$mentalidad->cuestionario_id = auth()->user()->cuestionario_anexo->id;
        $mentalidad->respuesta1 = $request->input('respuesta1');
        $mentalidad->respuesta2 = $request->input('respuesta2');
        $mentalidad->respuesta3 = $request->input('respuesta3');
        $mentalidad->respuesta4 = $request->input('respuesta4');
        if (($request->respuesta5 + $request->r5) == 100)
        {
            $mentalidad->respuesta5 = $request->input('respuesta5');
            $mentalidad->r5 = $request->input('r5');
        }else{
            $mensaje = 'La suma total no es 100%. Vuelve a intentarlo';
            return back()
            ->withInput($request->only('respuesta1','respuesta2','respuesta3','respuesta4'))->with(compact('mensaje'));
        }
        $mentalidad->save();

        if (Auth::user()->cuestionario_anexo->atribucion && Auth::user()->cuestionario_anexo->nivel_empatia && 
            Auth::user()->cuestionario_anexo->tipo_mentalidad)
        {
            $cuestionario_anexo = new CuestionarioAlumnoController(); // creamos una instancial del controlador
            $cuestionario_anexo->update(); // Llamamos al metodo update
            $mensaje = 'Has finalizalo el cuestionario. Gracias por compartir esta información eres lo más 
                        importante para nosotros.';
            return redirect('/alumno/encuestas')->with(compact('mensaje'));
        }else{
            $mensaje = 'Has realizado el cuestionario "Tipo de mentalidad" exitosamente';
            return redirect('/alumno/cuestionario')->with(compact('mensaje'));
        }        
    }
}
