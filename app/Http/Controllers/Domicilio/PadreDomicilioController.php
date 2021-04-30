<?php

namespace App\Http\Controllers\Domicilio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Padre_familia as padre;
use App\Domicilio;
use App\B_Domicilio;
use Auth;

class PadreDomicilioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:padre');
    }

    public function mostrar_domicilio()
    {        
    	$domicilios = Domicilio::all();    	
    	return view('padre_familia.domicilio.padre_domicilio')->with(compact('domicilios'));
    }

    public function seleccionar_domicilio (Request  $request)
    {    	    	
    	$b_domicilio = new B_Domicilio;    	
    	$b_domicilio->padre_id = Auth::user()->id;
    	$b_domicilio->domicilio_id = $request->input('domicilio_id');
    	$b_domicilio->save();
    	$mensaje = 'Se ha asignado el domicilio exitosamente';
    	return redirect('/padre_familia')->with(compact('mensaje'));
    }

    public function destroy_domicilio($padre_id, $domicilio_id)
    {
    	$padre = padre::find($padre_id);    	
	    $padre->domicilios()->detach($domicilio_id);
	    $mensaje = 'Por favor, agrega tu domicilio';
	    return redirect('padre_familia/'.$padre->id.'/domicilio')->with(compact('mensaje'));
    }

    public function create()
    {
        return view('padre_familia.domicilio.padre_registrar_domicilio');
    }

    public function store(Request $request)
    {
        $rules = [
            'estado' => 'required',
            'municipio' => 'required',
            'localidad' => 'required',
            'calle' => 'required',
            'cp' => 'required',
            'colonia' => 'required',
            'no_interior' => 'required',
            'no_exterior' => 'required',
        ];

        $message = [
            'estado.required' => 'Debes de agregar el estado',
            'municipio.required' => 'Debes de agregar el municipio ',
            'localidad.required' => 'Debes de agregar la localidad',
            'calle.required' => 'Debes de agregar  la calle',
            'cp.required' => 'Debes de agregar  el codigo postal',
            'colonia.required' => 'Debes de agregar la colonia',
            'no_interior.required' => 'Debes de agregar el No interior',
            'no_exterior.required' => 'Debes de agregar el No exterior',
        ]; 

        $this->validate($request , $rules , $message);

        $domicilio = new Domicilio;
        
        $domicilio->estado = $request->input('estado');
        $domicilio->municipio = $request->input('municipio');
        $domicilio->localidad = $request->input('localidad');
        $domicilio->calle = $request->input('calle');
        $domicilio->cp = $request->input('cp');
        $domicilio->colonia = $request->input('colonia');
        $domicilio->no_interior = $request->input('no_interior');
        $domicilio->no_exterior = $request->input('no_exterior');
        $domicilio->save();

        /// registrar la relacion del alumno y domilio

        $b_domicilio = new B_Domicilio;     
        $b_domicilio->padre_id = Auth::user()->id;        
        $b_domicilio->domicilio_id = $domicilio->id;
        $b_domicilio->save();
        $mensaje = 'Se ha asignado el domicilio exitosamente';
        
        return redirect('/padre_familia')->with(compact('mensaje'));
    }
  
}
