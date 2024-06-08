@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Analítica de Ventas</h2>
    <p>Ventas Totales: {{ $totalVentas }}</p>
    <p>Ingresos Totales: ${{ $ingresosTotales }}</p>
    @if($productoMasVendido)
        <p>Producto Más Vendido: {{ $productoMasVendido->nombre }}</p>
    @else
        <p>No hay ventas registradas.</p>
    @endif
</div>
@endsection
