<?php

namespace App\Http\Controllers\Auth\Padre_familia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class PadreLoginController extends Controller
{
    public function __construct()
	{
		$this->middleware('guest:padre');
	}

    public function showLoginForm()
    {
        return view('auth.padre.padre-login');
    }

    public function login(Request $request)
    {
    	//validation
    	$rules = [
    		'email' => 'required|email',
    		'password' => 'required',
    	];

        $message = [
            'email.required' => 'Debes de colocar tu correo electrónico.',
            'email.email' => 'Este campo acepta solo correo electrónico',
            'password.required' => 'Debes de colocar tu contraseña',
        ];

    	$this->validate($request,$rules,$message);

    	//dd($request->all());

    	if(Auth::guard('padre')->attempt(['email' => $request->email, 'password' => $request->password]))
    	{
    		return redirect('/padre_familia');
    	}else{
            $mensaje = 'Correo electrónico o contraseña incorrecta, vuelve a intentarlo.';
    		return back()
            ->withInput($request->only('email'))
            ->with(compact('mensaje'));
    	}

    }
}
