<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar JUGADOR</title>
</head>
<body>
    <h1>EDITAR JUGADOR</h1>

    <form action="{{ route('Jugador.update', $jugador->id) }}" method="POST">
        @csrf
        @method('put')

        <label>
            CODIGO:
            <br>
            <input type="number" name="codigo" value="{{ old('codigo', $jugador->codigo) }}">
        </label>
        <br>
        <label>
            FECHA NACIMIENTO:
            <br>
            <input type="date" name="fecha_nac" value="{{ old('fecha_nac', $jugador->fecha_nac) }}">
        </label>
        <br>
        <label>
            NOMBRE:
            <br>
            <input type="text" name="nombre" value="{{ old('nombre', $jugador->nombre) }}">
        </label>
        <br>
        <label>
            POSICION:
            <br>
            <input type="text" name="posicion" value="{{ old('posicion', $jugador->posicion) }}">
        </label>
        <br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
