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
        // Obtener el ID del producto de la solicitud
        $productoId = $request->input('producto_id');

        // Obtener el producto por su ID (por ejemplo, de una base de datos o de una API)
        $producto = Producto::findOrFail($productoId);

        // Agregar el producto al carrito (por ejemplo, a la sesión)
        $carrito = session()->get('carrito', []);
        $carrito[] = $producto;
        session()->put('carrito', $carrito);

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
