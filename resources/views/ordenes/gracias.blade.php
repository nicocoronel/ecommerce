@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Gracias por su compra</h1>
        <p>Su número de orden es: {{ $order->id }}</p>
        <p>Total pagado: {{ $order->total }} €</p>
    </div>
@endsection
