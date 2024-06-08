<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductoController extends Controller
{
    public function index()
    {
        // Realizar una solicitud a la API para obtener los productos
        $response = Http::get('https://api.escuelajs.co/api/v1/products'); 
        
        if ($response->successful()) {
            $productos = $response->json();
        } else {
            $productos = []; // En caso de que la solicitud falle, devolver un array vacío
        }

        return view('productos.index', compact('productos'));
    }
}
