<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class FuncionesDentroLoginControlador extends Controller
{
    // Function para manejar el login del user
    public function login(Request $request)
    {
        // Validate request data
        $request->validate([
            'Gmail' => 'required|email',
            'Contraseña' => 'required',
        ]);

        // Authenticando el usuatrio
        if (auth()->attempt($request->only('Gmail', 'Contraseña'))) {             // Authenticacion con exíto

            return redirect()->intended('/xxxx'); // Te redirege dentro para ver estado animos
        } else {
            
            return back()->with('error', 'Correo electrónico o contraseña incorrectos.'); // Authenticacion fallo
            }
    }

    public function logout()
    {
        auth()->logout(); // Logout the user
        return redirect('/inicioSesion'); // Redirect to login page
    }
}
