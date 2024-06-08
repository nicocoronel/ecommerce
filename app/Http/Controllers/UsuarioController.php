<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UsuarioController extends Controller
{
    public function obtenerUsuarios()
    {
        // Obtener usuarios desde la API
        $response = Http::get('https://randomuser.me/api/?results=10');
        $usuarios = $response->json()['results'];

        return view('usuarios.usuarios', compact('usuarios'));
    }
}
