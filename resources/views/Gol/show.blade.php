<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Gol</title>
</head>
<body>
    <h1>DETALLES DEL GOL</h1>

    <p>ID: {{ $gol->id }}</p>
    <p>Código: {{ $gol->codigo }}</p>
    <p>Minuto: {{ $gol->minuto }}</p>
    <p>Descripción: {{ $gol->desc }}</p>

    <a href="{{ route('Gol.index') }}">Volver</a>
</body>
</html>
