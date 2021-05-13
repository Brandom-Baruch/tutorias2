<?php

namespace App\Http\Controllers\Auth\Alumno;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class AlumnoLoginController extends Controller
{
    
	public function __construct()
	{
		$this->middleware('guest:alumno');
	}


    public function showLoginForm()
    {
        return view('auth.alumno.alumno-login');
    }

    public function login(Request $request)
    {
    	//Reglas de validacion
    	$rules = [
    		$this->username() => 'required',
    		'password' => 'required',
    	];       

        $message = [
            $this->username().'.required' => 'Debes de colocar tu NIA',
            'password.required' => 'Debes de colocar tu contraseña',                        
        ];
        //Validamos las reglas
    	$this->validate($request,$rules,$message);

    	//dd($request->all());

        //Si existe un alumno con el NIA y el password
    	if(Auth::guard('alumno')->attempt([$this->username() => $request->nia, 'password' => $request->password]))
    	{
            //mandarlo a la ruta
    		return redirect('/alumno');
    	}else{
            $mensaje = 'Nia o contraseña incorrecta, vuelve a interarlo.';
            //Regresar al login solamente con el  nia
    		return back()
            ->withInput($request->only($this->username()))
            ->with(compact('mensaje'));
    	}

    }

    public function username() // Metodo para indicar que atributo sera iniciar sesion
    {
        return 'nia';
    }
}
