<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    /**
     * Log out account user.
     *
     * @return \Illuminate\Routing\Redirector
     */

    //Función que cierra la sesión iniciada por el usuario y redirije a la vista home
    public function perform()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('home');
    }
}