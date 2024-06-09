@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Productos</h1>
        <div class="row">
            @forelse($productos as $producto)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <!-- Mostrar la imagen del producto -->
                        <img src="{{ $producto['images'][0] }}" class="card-img-top" alt="{{ $producto['title'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $producto['title'] }}</h5>
                            <p class="card-text">{{ $producto['description'] }}</p>
                            <p class="card-text"><strong>Precio: </strong>{{ $producto['price'] }} €</p>
                            <form method="POST" action="{{ route('carrito.add') }}">
                                @csrf
                                <!-- Incluir el ID del producto en un campo oculto -->
                                <input type="hidden" name="producto_id" value="{{ $producto['id'] }}">
                                <button type="submit" class="btn btn-primary">Agregar al carrito</button>
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
