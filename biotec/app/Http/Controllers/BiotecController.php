<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiotecController extends Controller
{
    // Proteger el controlador completo con el middleware 'auth'
    public function __construct()
    {
        $this->middleware('auth'); // Protege todas las rutas de este controlador
    }

    // Método para mostrar la vista protegida de biotec
    public function index()
    {
        return view('biotec'); // Esta vista solo será accesible si el usuario está autenticado
    }
}
