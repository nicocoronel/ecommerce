@extends('layouts.app')

@section('content')
    <h1>Carrito de Compras</h1>
    @if(empty($carrito))
        <p>Tu carrito está vacío.</p>
    @else
        <ul>
            @foreach($carrito as $item)
                <li>
                    Producto: {{ $item['nombre'] }} <br>
                    Cantidad: {{ $item['cantidad'] }} <br>
                    Precio: {{ $item['precio'] }} <br>
                </li>
            @endforeach
        </ul>
    @endif
@endsection
