<?php

namespace App\Http\Controllers\Parentesco;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Padre_familia as padre;
use App\Parentezco;
use App\Alumno;

class PadreParentescoController extends Controller
{
    public function create()
	{
		$alumnos = Alumno::orderBy('grupo_id')->get();
		return view('padre_familia.padre_parentesco')->with(compact('alumnos'));
	}


	public function store(Request $request, $id)
	{

		$rules = [
			'parentezco' => 'required',            
		];

		$message = [
			'parentezco.required' => 'Debes de escribir el parentesco que tienen',            
		];

		$this->validate($request, $rules , $message);

		$padre = padre::find($id);
		$parentezco = new Parentezco;
		$parentezco->parentezco = $request->input('parentezco');
		$parentezco->alumno_id = $request->input('alumno_id');
		$parentezco->padre_id = $padre->id;
		$parentezco->save();
		$mensaje = 'Se ha agregado el familiar. ¿Quieres agregar otro familiar?';
		return back()->with(compact('mensaje'));
	}

	public function destroy($padre_id, $alumno_id)
	{
		$alumno = Alumno::find($alumno_id);
        $padre = padre::find($padre_id);
        $padre->alumnos()->detach($alumno->nia);        
        $eliminado = 'Se ha quitado el alumno '. $alumno->name .' exitosamente ';
        return back()->with(compact('eliminado'));

	}
}
