<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class CarritoController extends Controller
{
    public function index()
    {
        // Lógica para mostrar el carrito
        $carrito = session()->get('carrito', []);

        return view('carritos.index', compact('carrito'));
    }

    public function add(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required',
        ]);

        // Obtener los datos del producto de la solicitud
        $nombreProducto = $request->input('nombre');
        $precioProducto = $request->input('precio');
        $descripcionProducto = $request->input('descripcion');
        $imagenProducto = $request->input('imagen');

        // Guardar el producto en la base de datos
        $producto = Producto::create([
            'nombre' => $nombreProducto,
            'precio' => $precioProducto,
            'descripcion' => $descripcionProducto,
            'imagen' => $imagenProducto,
        ]);

        // Redirigir de vuelta al carrito o a la página de productos
        return redirect()->route('carrito.index');
    }

    public function remove($cartItem)
    {
        // Remover un producto del carrito (por ejemplo, de la sesión)
        $carrito = session()->get('carrito', []);

        // Verificar si el producto existe en el carrito y removerlo si es así
        if (isset($carrito[$cartItem])) {
            unset($carrito[$cartItem]);
            session()->put('carrito', $carrito);
        }

        // Redirigir de vuelta al carrito
        return redirect()->route('carrito.index');
    }
}
