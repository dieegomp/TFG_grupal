<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class RegistroControlador extends Controller
{
    // Función  registroUsuario
    public function register(Request $request)
    {
        return $request;
        // Validate request data
        // $request->validate([
        //     'nombre' => 'required|string',
        //     'usuario' => 'required|string|unique:usuarios',
        //     'apellido1' => 'required|string',
        //     'apellido2' => 'required|string',
        //     'email' => 'required|email|unique:usuarios',
        //     'password' => 'required|string|min:8',
        // ]);

        //Creación de usuaio nuevo
        $usuario = new Usuario();
        $usuario->Nombre = $request->Nombre;
        $usuario->Apellido1 = $request->Apellido1;
        $usuario->Apellido2 = $request->Apellido2;
        $usuario->Gmail = $request->Email;
        $usuario->Contraseña = bcrypt($request->Password); // Del internet
        $usuario->save();    
        return redirect()->route('login')->with('success', '¡Registro exitoso! Por favor inicia sesión.');  // redirigir al usuario a login si todo bien
    }
}
