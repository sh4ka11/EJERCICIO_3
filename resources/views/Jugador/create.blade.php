<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREAR JUGADOR</title>
</head>
<body>
    <h1>CREAR JUGADOR</h1>

    <form action="{{ route('Jugador.store') }}" method="POST">
        @csrf

        <label>
            CODIGO:
            <br>
            <input type="number" name="codigo">
        </label>
        <br>
        <label>
            FECHA NACIMIENTO:
            <br>
            <input type="date" name="fecha_nac">
        </label>
        <br>
        <label>
            NOMBRE:
            <br>
            <input type="text" name="nombre">
        </label>
        <br>
        <label>
            POSICION:
            <br>
            <input type="text" name="posicion">
        </label>
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>


