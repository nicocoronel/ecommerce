@foreach($carritos as $carrito)
    <div>
        <h2>{{ $carrito->producto->nombre }}</h2>
        <p>Cantidad: {{ $carrito->cantidad }}</p>
        <p>Total: ${{ $carrito->producto->precio * $carrito->cantidad }}</p>
    </div>
@endforeach