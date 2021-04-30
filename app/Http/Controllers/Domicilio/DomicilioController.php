<?php

namespace App\Http\Controllers\Domicilio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domicilio;
use App\Docente;
use App\B_Domicilio;
use App\Padre_familia as padre;

class DomicilioController extends Controller
{

    public function docente_create()
    {                
        $domicilios = Domicilio::all();        
        return view('docente.docente_domicilio')->with(compact('domicilios'));
    }

    public function docente_store (Request  $request, $id)
    {       
        $docente = Docente::find($id);      
        $b_domicilio = new B_Domicilio;     
        $b_domicilio->docente_id = $request->input('docente_id');
        $b_domicilio->domicilio_id = $request->input('domicilio_id');
        $b_domicilio->save();
        $mensaje = 'Se ha asignado el domicilio exitosamente';
        return redirect('docente')->with(compact('mensaje'));
    }

    public function docente_destroy($docente_id, $domicilio_id)
    {
        $docente = Docente::find($docente_id);
        $docente->domicilios()->detach($domicilio_id);
        $mensaje = 'Por favor, agrega tu domicilio';
        return redirect('docente/'.$docente->id.'/domicilio')->with(compact('mensaje'));
    }
}
