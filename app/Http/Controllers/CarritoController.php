<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function agregar(Request $request, $id)
    {
        $carrito = Carrito::where('user_id', auth()->id())->where('producto_id', $id)->first();
        if ($carrito) {
            $carrito->cantidad += 1;
            $carrito->save();
        } else {
            Carrito::create([
                'user_id' => auth()->id(),
                'producto_id' => $id,
                'cantidad' => 1,
            ]);
        }

        return redirect()->back();
    }

    public function mostrar()
    {
        $carritos = Carrito::where('user_id', auth()->id())->get();
        return view('carritos.index', compact('carritos'));
    }
}
