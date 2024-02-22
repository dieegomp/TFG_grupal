<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estado;

class EstadoAnimoControlador extends Controller
{
    // Function para cojer todo los estados
    public function index()
    {
        $estados = Estado::all(); // Los coje de la baseDeDatos
        return view('estados.index', compact('estados')); // Assuming you have a blade template named 'index.blade.php' to display mood states
    }
}
