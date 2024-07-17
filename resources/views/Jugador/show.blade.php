<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del jugador</title>
</head>
<body>
    <h1>DETALLES DEL JUGADOR</h1>

    <p>ID: {{ $jugador->id }}</p>
    <p>codigo: {{ $jugador->codigo }}</p>
    <p>fecha de nacimiento: {{ $jugador->fecha_nac }}</p>
    <p>nombre: {{ $jugador->nombre }}</p>
    <p>posicion: {{ $jugador->posicion }}</p>
   

    <a href="{{ route('Jugador.index') }}">Volver</a>
</body>
</html>