<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class LoginControlador extends Controller
{
    // Funcion para ver el login form
    public function showLoginForm()
    {
        return view('inicioSesion'); // Da por hecho que tienes un .blade llamado'inicioSesion.blade.php' en tu login form
    }
}
