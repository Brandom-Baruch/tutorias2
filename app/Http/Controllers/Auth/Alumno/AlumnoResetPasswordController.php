<?php

namespace App\Http\Controllers\Auth\Alumno;

use Illuminate\Foundation\Auth\ResetsPasswords;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Password;
use Auth;

class AlumnoResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/alumno';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:alumno');
    }

    protected function guard()
    {
        return Auth::guard('alumno');
    }


    protected function broker()
    {
        return Password::broker('alumnos');
    }

    public function showResetForm(Request $request, $token = null)
    {
        return view('auth.passwords.alumno.reset-alumno')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
}
