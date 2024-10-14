<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth; 

class ProfileController extends Controller
{
    // Proteger el controlador completo con el middleware 'auth'
    public function show()
    {
        // Obtenemos el usuario autenticado
        $user = Auth::user();

        // Retornamos la vista del perfil con los datos del usuario
        return view('profile', compact('user'));
    }
}
