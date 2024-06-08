<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Orden;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdenController extends Controller
{
    public function checkout()
    {
        $cartItems = Cart::with('product')->get();
        $total = $cartItems->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });

        $order = new Orden();
        $order->user_id = Auth::id();
        $order->total = $total;
        $order->save();

        Cart::truncate();

        return view('ordenes.gracias', compact('order'));
    }
}

