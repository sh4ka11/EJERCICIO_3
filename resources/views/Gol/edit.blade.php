<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTUALIZAR GOL</title>
</head>
<body>
    <h1>EDITAR GOL</h1>

    <form action="{{ route('Gol.update', $gol->id) }}" method="POST">
        @csrf
        @method('put')

        <label>
            CÓDIGO:
            <br>
            <input type="number" name="codigo" value="{{ old('codigo', $gol->codigo) }}">
        </label>
        <br>
        <label>
            MINUTO:
            <br>
            <input type="number" name="minuto" value="{{ old('minuto', $gol->minuto) }}">
        </label>
        <br>
        <label>
            DESCRIPCIÓN:
            <br>
            <input type="text" name="desc" value="{{ old('desc', $gol->desc) }}">
        </label>
        <br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>

