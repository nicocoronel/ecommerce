<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;

class AnaliticaController extends Controller
{
    public function index()
    {
        $totalVentas = Carrito::sum('cantidad');
        $ingresosTotales = Carrito::sum(DB::raw('cantidad * precio'));
        $productoMasVendido = Producto::withCount('carritos')
            ->orderBy('carritos_count', 'desc')
            ->first();

        return view('analitica.index', compact('totalVentas', 'ingresosTotales', 'productoMasVendido'));
    }
}
