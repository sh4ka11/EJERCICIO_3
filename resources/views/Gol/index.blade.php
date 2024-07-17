<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Goles</title>
</head>
<body>
    <h1>GOLES</h1>

    <a href="{{ route('Gol.create') }}">Nuevo GOL</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>CÓDIGO</th>
                <th>MINUTO</th>
                <th>DESCRIPCIÓN</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gol as $gol)
                <tr>
                    <td>{{ $gol->id }}</td>
                    <td>{{ $gol->codigo }}</td>
                    <td>{{ $gol->minuto }}</td>
                    <td>{{ $gol->desc }}</td>
                    <td>
                        <a href="{{ route('Gol.show', $gol->id) }}">Mostrar</a>
                        <a href="{{ route('Gol.edit', $gol->id) }}">Editar</a>
                        <form action="{{ route('Gol.destroy', $gol->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

