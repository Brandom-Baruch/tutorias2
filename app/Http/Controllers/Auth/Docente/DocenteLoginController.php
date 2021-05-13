<?php

namespace App\Http\Controllers\Auth\Docente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Docente;

class DocenteLoginController extends Controller
{
    
    //use RedirectsUsers, ThrottlesLogins;

    public function __construct()
	{
		$this->middleware('guest:docente'); //Indicamos que la vista del login sera para invitados
	}

    public function showLoginForm()
    {
        return view('auth.docente.docente-login'); //Mostramos la vista
    }

    public function login(Request $request)
    {
    	//Colocamos las validaciones
    	$rules = [
    		'email' => 'required|email',
    		'password' => 'required',
    	];


        $meesage = [
            'email.required' => 'Debes de colocar tu correo electrónico',
            'email.email' => 'Este campo acepta solo correo electrónico',
            'password.required' => 'Debes de colocar tu contraseña'
        ];


    	$this->validate($request,$rules,$meesage); //Ejecutamos la validacion si existe un error

    	//dd($request->all());
        //Si existe un docente con el correo y contraseña colocadas
    	if(Auth::guard('docente')->attempt(['email' => $request->email, 'password' => $request->password]))
    	{            
    		return redirect('/docente'); //Redirige a la ruta docente
    	}else{            
            //Redigire a login con un mensaje y el correo colocado 
            $mensaje = 'Correo o contraseña equivocadas. Intentelo de nuevo';
    		return back()
            ->withInput($request->only('email'))
            ->with(compact('mensaje')); //Solo muestra el correo electronico
        }

	}

}
