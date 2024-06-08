@extends('layouts.app')

@section('content')
    <div>
        <h2>Ventas Totales: {{ $totalVentas }}</h2>
        <h2>Ingresos Totales: ${{ $ingresosTotales }}</h2>
        <h2>Producto Más Vendido: {{ $productoMasVendido->nombre }}</h2>
    </div>
@endsection