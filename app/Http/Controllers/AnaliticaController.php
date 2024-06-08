<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;

class AnaliticaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $totalVentas = Carrito::sum('cantidad');
        $ingresosTotales = Carrito::join('productos', 'carritos.producto_id', '=', 'productos.id')
            ->sum(DB::raw('cantidad * productos.precio'));

        $productoMasVendido = Producto::withCount('carritos')
            ->orderBy('carritos_count', 'desc')
            ->first();

        return view('analitica.index', compact('totalVentas', 'ingresosTotales', 'productoMasVendido'));
    }

}
