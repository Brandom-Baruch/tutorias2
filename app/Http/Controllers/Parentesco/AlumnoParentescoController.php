<?php

namespace App\Http\Controllers\Parentesco;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Padre_familia as padre;
use App\Parentezco;
use App\Alumno;

class AlumnoParentescoController extends Controller
{
    public function create()
	{
		$padres = padre::all();
		return view('alumno.alumno_parentesco')->with(compact('padres'));
	}


	public function store(Request $request, $nia)
	{

		$rules = [
			'parentezco' => 'required',            
		];

		$message = [
			'parentezco.required' => 'Debes de escribir el parentezco que tienen',            
		];

		$this->validate($request, $rules , $message);

		$alumno = Alumno::find($nia);
		$parentezco = new Parentezco;
		$parentezco->parentezco = $request->input('parentezco');
		$parentezco->alumno_id = $alumno->nia;
		$parentezco->padre_id = $request->input('padre_id');
		$parentezco->save();
		$mensaje = 'Se ha agregado el familiar. ¿Quieres agregar otro familiar?';
		return back()->with(compact('mensaje'));
	}

	public function destroy($nia, $padre_id)
	{
		$alumno = Alumno::find($nia);
		$padre = padre::find($padre_id);
		$alumno->padres()->detach($padre->id);
		$eliminado = 'Se ha quitado el familiar exitosamente';
		return back()->with(compact('eliminado'));
	}
}
