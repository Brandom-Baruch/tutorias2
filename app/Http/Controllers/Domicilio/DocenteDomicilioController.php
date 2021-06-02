<?php

namespace App\Http\Controllers\Domicilio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domicilio;
use App\Docente;
use App\B_Domicilio;
use Auth;
class DocenteDomicilioController extends Controller
{

    public function mostrar_domicilio()
    {                
        $domicilios = Domicilio::all();        
        return view('docente.domicilio.docente_domicilio')->with(compact('domicilios'));
    }

    public function seleccionar_domicilio (Request  $request, $id)
    {       
        $docente = Docente::find($id);      
        $b_domicilio = new B_Domicilio;     
        $b_domicilio->docente_id = $request->input('docente_id');
        $b_domicilio->domicilio_id = $request->input('domicilio_id');
        $b_domicilio->save();
        $mensaje = 'Se ha asignado el domicilio exitosamente';
        return redirect('docente')->with(compact('mensaje'));
    }

    public function destroy_domicilio($docente_id, $domicilio_id)
    {
        $docente = Docente::find($docente_id);
        $docente->domicilios()->detach($domicilio_id);
        $mensaje = 'Por favor, agrega tu domicilio';
        return redirect('docente/'.$docente->id.'/domicilio')->with(compact('mensaje'));
    }

    public function create()
    {
        return view('docente.domicilio.docente_registrar_domicilio');
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
        $b_domicilio->docente_id = Auth::user()->id;
        //dd($b_domicilio->alumno_id);
        $b_domicilio->domicilio_id = $domicilio->id;
        $b_domicilio->save();
        $mensaje = 'Se ha asignado el domicilio exitosamente';
        
        return redirect('docente')->with(compact('mensaje'));
    }

}
