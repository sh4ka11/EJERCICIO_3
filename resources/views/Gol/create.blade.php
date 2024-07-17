<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREAR GOL</title>
</head>
<body>
    <h1>CREAR GOL</h1>

    <form action="{{ route('Gol.store') }}" method="POST">
        @csrf

        <label>
            CÓDIGO:
            <br>
            <input type="number" name="codigo">
        </label>
        <br>
        <label>
            MINUTO:
            <br>
            <input type="number" name="minuto">
        </label>
        <br>
        <label>
            DESCRIPCIÓN:
            <br>
            <input type="text" name="desc">
        </label>
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

