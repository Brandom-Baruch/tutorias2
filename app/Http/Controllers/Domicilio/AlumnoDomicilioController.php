<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\B_Domicilio;
use App\Domicilio;
use App\Alumno;
use Auth;

class AlumnoDomicilioController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth:alumno');
    }

    public function mostrar_domicilio(Request $request,$nia)
    {        
        $domicilios = Domicilio::paginate(10); 
        //dd($domicilios);               
        return view('alumno.domicilio.alumno_domicilio')->with(compact('domicilios'));
    }

    public function seleccionar_domicilio (Request  $request)
    {                   
        $b_domicilio = new B_Domicilio;     
        $b_domicilio->alumno_nia = $request->input('alumno_id');
        //dd($b_domicilio->alumno_id);
        $b_domicilio->domicilio_id = $request->input('domicilio_id');
        $b_domicilio->save();
        $mensaje = 'Se ha asignado el domicilio exitosamente';
        return redirect('alumno')->with(compact('mensaje'));
    }

    public function destroy_domicilio($alumno_id, $domicilio_id)
    {
        $alumno = Alumno::find($alumno_id);
        $alumno->domicilios()->detach($domicilio_id);
        $eliminado = 'Se ha eliminado el domicilio. Selecciona tu domicilio actual';
        return redirect('alumno/'.Auth::user()->nia.'/domicilio')->with(compact('eliminado'));
    }

    public function create()
    {
        return view('alumno.domicilio.alumno_registrar_domicilio');
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
        $b_domicilio->alumno_id = Auth::user()->nia;
        //dd($b_domicilio->alumno_id);
        $b_domicilio->domicilio_id = $domicilio->id;
        $b_domicilio->save();
        $mensaje = 'Se ha asignado el domicilio exitosamente';
        
        return redirect('alumno')->with(compact('mensaje'));
    }

}
