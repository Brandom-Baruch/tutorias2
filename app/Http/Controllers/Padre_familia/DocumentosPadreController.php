<?php

namespace App\Http\Controllers\Padre_familia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DocumentoPadre;
use Auth;
use File;

class DocumentosPadreController extends Controller
{

    public function store(Request $request)
    {
    	//guardar el archivo 
    	$file = $request->file('archivo'); // obtiene el archivo que se esta subiendo 
    	$url = app_path(). '/documentos/padre_familia'; //creamos una carpeta dentro de la carpeta app
    	$fileName =  uniqid() . $file->getClientOriginalName(); //concatenamos el nombre con una serie de numeros y letras
    	$moved=$file->move($url , $fileName); //Se concatena entre el nombre del archivo y el nombre del padre de familia

        if($moved) // Si hay un archivo en la variable moved
        {
        	$documentoPadre = new DocumentoPadre();
        	$documentoPadre->nombre_archivo = $fileName;
        	$documentoPadre->padre_id = Auth::user()->id;         	
        	$documentoPadre->save();//guardamos y procedera en hacer un INSERT
        }
        $mensaje = "Se ha subido un archivo correctamente";
    	return back()->with(compact('mensaje')); //Regresamos al panel del padre de familia
    }

    public function destroy(Request $request, $id)
    {
    	$documentoPadre = DocumentoPadre::find($id);
    	$url = app_path(). '/documentos/padre_familia/'.$documentoPadre->nombre_archivo;	
    		
    	$deleted = File::delete($url);

    	if ($deleted) {
    		$documentoPadre->delete();
            $eliminado = "Se ha eliminado el archivo correctamente";
            return back()->with(compact('eliminado'));
    	}   

        return back(); 	
    }

    public function verDocumento($id)
    {
        $archivo = DocumentoPadre::find($id); //Encontramos el documento
        $url = app_path().'/documentos/padre_familia/'.$archivo->nombre_archivo; //buscamos el documento en la carpeta app
        if ($url) { //Si encontramos el documento
            return response()->file($url); //mostramos el documentos
        }
        return back(); //En caso contrario, solo actualizamos la pagina sin mostrar nada
    }
}
