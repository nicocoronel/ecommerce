@foreach($productos as $producto)
    <div>
        <img src="{{ $producto->imagen }}" alt="{{ $producto->nombre }}">
        <h2>{{ $producto->nombre }}</h2>
        <p>{{ $producto->descripcion }}</p>
        <p>${{ $producto->precio }}</p>
        <form action="{{ route('carrito.agregar', $producto->id) }}" method="POST">
            @csrf
            <button type="submit">Agregar al Carrito</button>
        </form>
    </div>
@endforeach