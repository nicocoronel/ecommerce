@extends('layouts.app')

@section('content')
    <h1>Carrito de Compras</h1>
    @if(empty($carrito) || !is_array($carrito))
        <p>Tu carrito está vacío o no se pudo cargar correctamente.</p>
    @else
        <ul>
            @foreach($carrito as $item)
                @if(is_array($item))
                    <li>
                        Producto: {{ $item['nombre'] }} <br>
                        Cantidad: {{ $item['cantidad'] }} <br>
                        Precio: {{ $item['precio'] }} <br>
                    </li>
                @endif
            @endforeach
        </ul>
    @endif
@endsection
