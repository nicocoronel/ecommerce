@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Productos</h1>
        <div class="row">
            @forelse($productos as $producto)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <!-- Mostrar la primera imagen del producto -->
                        <img src="{{ $producto['images'][0] }}" class="card-img-top" alt="{{ $producto['title'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $producto['title'] }}</h5>
                            <p class="card-text">{{ $producto['description'] }}</p>
                            <p class="card-text"><strong>Precio: </strong>{{ $producto['price'] }} €</p>
                            <form method="POST" action="{{ route('carrito.add') }}">
                                @csrf
                                <!-- Otros campos del formulario, si es necesario -->
                                <button type="submit">Agregar al carrito</button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <p>No hay productos disponibles.</p>
            @endforelse
        </div>
    </div>
@endsection
