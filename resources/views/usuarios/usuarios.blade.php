@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de Usuarios</title>
        <style>
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Lista de Usuarios</h1>
            <ul>
                @foreach($usuarios as $usuario)
                    <li>
                        @if(isset($usuario['picture']['large']))
                            <img src="{{ $usuario['picture']['large'] }}" alt="Foto de perfil de {{ $usuario['name']['first'] }}">
                        @endif
                        <div class="details">
                            <strong>Nombre:</strong> {{ $usuario['name']['first'] }} {{ $usuario['name']['last'] }}<br>
                            <strong>Correo Electrónico:</strong> {{ $usuario['email'] }}<br>
                            <strong>País:</strong> {{ $usuario['location']['country'] }}<br>
                            <!-- Agrega más detalles del usuario según tus necesidades -->
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </body>
    </html>
@endsection
