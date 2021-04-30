<?php

namespace App\Http\Controllers\Padre_familia\Entrevista_fresca;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Entrevista_Fresca_Padre;
use App\MarcaX;
use App\Alumno;
use App\Padre_familia;

class MarcaXController extends Controller
{
	public function create($alumno_id)
	{	
		$alumno = Alumno::find($alumno_id);    
    	//dd(auth()->user()->entrevista->alumno_id);
		return view('padre_familia.entrevista_fresca.marca_x')->with(compact('alumno'));	
	}

	public function store(Request $request,$alumno_id)
	{
		$rules = [

			'r1' => 'required',
            'r1_2' => 'required',
			'r1_3' => 'required',
			'r2' => 'required',
            'r2_2' => 'required', 
			'r2_3' => 'required',
			'r3' => 'required',
            'r3_2' => 'required', 
			'r3_3' => 'required',
			'r4' => 'required',
            'r4_2' => 'required', 
			'r4_3' => 'required',
			'r5' => 'required',
            'r5_2' => 'required',  
			'r5_3' => 'required',
			'r6' => 'required',
            'r6_2' => 'required',  
			'r6_3' => 'required',
			'r7' => 'required',
            'r7_2' => 'required',
			'r7_3' => 'required',
			'r8' => 'required',
            'r8_2' => 'required',
			'r8_3' => 'required',
			'r9' => 'required',
            'r9_2' => 'required',
			'r9_3' => 'required',
			'r10' => 'required',
            'r10_2' => 'required',
			'r10_3' => 'required',
			'r11' => 'required',
            'r11_2' => 'required',
			'r11_3' => 'required',
			'r12' => 'required',
            'r12_2' => 'required',
			'r12_3' => 'required',
			'r13' => 'required',
            'r13_2' => 'required',
			'r13_3' => 'required',
			'r14' => 'required',
            'r14_2' => 'required',
			'r14_3' => 'required',
			'r15' => 'required',
            'r15_2' => 'required',
			'r15_3' => 'required',
			'r16' => 'required',
            'r16_2' => 'required',
			'r16_3' => 'required',
			'r17' => 'required',
            'r17_2' => 'required', 
			'r17_3' => 'required',
			'r18' => 'required',
            'r18_2' => 'required',    
			'r18_3' => 'required',
			'r19' => 'required',
            'r19_2' => 'required',
			'r19_3' => 'required',
			'r20' => 'required',
            'r20_2' => 'required',
			'r20_3' => 'required',
			'r21' => 'required',
            'r21_2' => 'required',     
			'r21_3' => 'required'
		];

		$message = [
			'r1.required' => 'Selecciona una opción',
            'r1_2.required' => 'Selecciona un porcentaje',
			'r2.required' => 'Selecciona una opción',
            'r2_2.required' => 'Selecciona un porcentaje',
			'r3.required' => 'Selecciona una opción',
            'r3_2.required' => 'Selecciona un porcentaje',
			'r4.required' => 'Selecciona una opción',
            'r4_2.required' => 'Selecciona un porcentaje',
			'r5.required' => 'Selecciona una opción',
            'r5_2.required' => 'Selecciona un porcentaje',
			'r6.required' => 'Selecciona una opción',
            'r6_2.required' => 'Selecciona un porcentaje',
			'r7.required' => 'Selecciona una opción',
            'r7_2.required' => 'Selecciona un porcentaje',
			'r8.required' => 'Selecciona una opción',
            'r8_2.required' => 'Selecciona un porcentaje',
			'r9.required' => 'Selecciona una opción',
            'r9_2.required' => 'Selecciona un porcentaje',
			'r10.required' => 'Selecciona una opción',
            'r10_2.required' => 'Selecciona un porcentaje',
			'r11.required' => 'Selecciona una opción',
            'r11_2.required' => 'Selecciona un porcentaje',
			'r12.required' => 'Selecciona una opción',
            'r12_2.required' => 'Selecciona un porcentaje',
			'r13.required' => 'Selecciona una opción',
            'r13_2.required' => 'Selecciona un porcentaje',
			'r14.required' => 'Selecciona una opción',
            'r14_2.required' => 'Selecciona un porcentaje',
			'r15.required' => 'Selecciona una opción',
            'r15_2.required' => 'Selecciona un porcentaje',
			'r16.required' => 'Selecciona una opción',
            'r16_2.required' => 'Selecciona un porcentaje',
			'r17.required' => 'Selecciona una opción',
            'r17_2.required' => 'Selecciona un porcentaje',
			'r18.required' => 'Selecciona una opción',
            'r18_2.required' => 'Selecciona un porcentaje',
			'r19.required' => 'Selecciona una opción',
            'r19_2.required' => 'Selecciona un porcentaje',
			'r20.required' => 'Selecciona una opción',
            'r20_2.required' => 'Selecciona un porcentaje',
			'r21.required' => 'Selecciona una opción',
            'r21_2.required' => 'Selecciona un porcentaje', 
			'r1_3.required' => 'Especifica un caso',
			'r2_3.required' => 'Especifica un caso',
			'r3_3.required' => 'Especifica un caso',
			'r4_3.required' => 'Especifica un caso',
			'r5_3.required' => 'Especifica un caso',
			'r6_3.required' => 'Especifica un caso',
			'r7_3.required' => 'Especifica un caso',
			'r8_3.required' => 'Especifica un caso',
			'r9_3.required' => 'Especifica un caso',
			'r10_3.required' => 'Especifica un caso',
			'r11_3.required' => 'Especifica un caso',
			'r12_3.required' => 'Especifica un caso',
			'r13_3.required' => 'Especifica un caso',
			'r14_3.required' => 'Especifica un caso',
			'r15_3.required' => 'Especifica un caso',
			'r16_3.required' => 'Especifica un caso',
			'r17_3.required' => 'Especifica un caso',
			'r18_3.required' => 'Especifica un caso',
			'r19_3.required' => 'Especifica un caso',
			'r20_3.required' => 'Especifica un caso',
			'r21_3.required' => 'Especifica un caso',
		];

		$this->validate($request,$rules,$message);
		
		$alumno_id = Alumno::find($alumno_id);
		$entrevista_id = Entrevista_Fresca_Padre::where('alumno_id',$alumno_id->nia)->first();
//		dd($entrevista_id);
		$marca_x = new MarcaX;						
		$marca_x->entrevista_id = $entrevista_id->id;
		$marca_x->r1 = $request->input('r1');
		$marca_x->r1_2 = $request->input('r1_2');
		$marca_x->r1_3 = $request->input('r1_3');
		$marca_x->r2 = $request->input('r2');
		$marca_x->r2_2 = $request->input('r2_2');
		$marca_x->r2_3 = $request->input('r2_3');
		$marca_x->r3 = $request->input('r3');
		$marca_x->r3_2 = $request->input('r3_2');
		$marca_x->r3_3 = $request->input('r3_3');
		$marca_x->r4 = $request->input('r4');
		$marca_x->r4_2 = $request->input('r4_2');
		$marca_x->r4_3 = $request->input('r4_3');
		$marca_x->r5 = $request->input('r5');
		$marca_x->r5_2 = $request->input('r5_2');
		$marca_x->r5_3 = $request->input('r5_3');
		$marca_x->r6 = $request->input('r6');
		$marca_x->r6_2 = $request->input('r6_2');
		$marca_x->r6_3 = $request->input('r6_3');
		$marca_x->r7 = $request->input('r7');
		$marca_x->r7_2 = $request->input('r7_2');
		$marca_x->r7_3 = $request->input('r7_3');
		$marca_x->r8 = $request->input('r8');
		$marca_x->r8_2 = $request->input('r8_2');
		$marca_x->r8_3 = $request->input('r8_3');
		$marca_x->r9 = $request->input('r9');
		$marca_x->r9_2 = $request->input('r9_2');
		$marca_x->r9_3 = $request->input('r9_3');
		$marca_x->r10 = $request->input('r10');
		$marca_x->r10_2 = $request->input('r10_2');
		$marca_x->r10_3 = $request->input('r10_3');
		$marca_x->r11 = $request->input('r11');
		$marca_x->r11_2 = $request->input('r11_2');
		$marca_x->r11_3 = $request->input('r11_3');
		$marca_x->r12 = $request->input('r12');
		$marca_x->r12_2 = $request->input('r12_2');
		$marca_x->r12_3 = $request->input('r12_3');
		$marca_x->r13 = $request->input('r13');
		$marca_x->r13_2 = $request->input('r13_2');
		$marca_x->r13_3 = $request->input('r13_3');
		$marca_x->r14 = $request->input('r14');
		$marca_x->r14_2 = $request->input('r14_2');
		$marca_x->r14_3 = $request->input('r14_3');
		$marca_x->r15 = $request->input('r15');
		$marca_x->r15_2 = $request->input('r15_2');
		$marca_x->r15_3 = $request->input('r15_3');
		$marca_x->r16 = $request->input('r16');
		$marca_x->r16_2 = $request->input('r16_2');
		$marca_x->r16_3 = $request->input('r16_3');
		$marca_x->r17 = $request->input('r17');
		$marca_x->r17_2 = $request->input('r17_2');
		$marca_x->r17_3 = $request->input('r17_3');
		$marca_x->r18 = $request->input('r18');
		$marca_x->r18_2 = $request->input('r18_2');
		$marca_x->r18_3 = $request->input('r18_3');
		$marca_x->r19 = $request->input('r19');
		$marca_x->r19_2 = $request->input('r19_2');
		$marca_x->r19_3 = $request->input('r19_3');
		$marca_x->r20 = $request->input('r20');
		$marca_x->r20_2 = $request->input('r20_2');
		$marca_x->r20_3 = $request->input('r20_3');
		$marca_x->r21 = $request->input('r21');
		$marca_x->r21_2 = $request->input('r21_2');
		$marca_x->r21_3 = $request->input('r21_3');
		$marca_x->save();
		$mensaje = 'Has realizo la encuesta "Aspectos que tiene tu hijo" exitosamente';
		return redirect('/padre_familia/entrevista/'.$alumno_id->nia.'/secciones')->with(compact('mensaje'));
	}
}
