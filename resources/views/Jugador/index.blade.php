<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de jugadores</title>
</head>
<body>
    <h1>JUGADORES</h1>

    <a href="{{ route('Destino.create') }}">Nuevo JUGADOR</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>CODIGO</th>
                <th>FECHA NACIMIENTO</th>
                <th>NOMBRE</th>
                <th>POSICION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jugador as $jugador)
                <tr>
                    <td>{{ $jugador->id }}</td>
                    <td>{{ $jugador->codigo }}</td>
                    <td>{{ $jugador->fecha_nac }}</td>
                    <td>{{ $jugador->nombre }}</td>
                    <td>{{ $jugador->posicion }}</td>
                    <td>
                        <a href="{{ route('Jugador.show', $jugador->id) }}">Mostrar</a>
                        <a href="{{ route('Jugador.edit', $jugador->id) }}">Editar</a>
                        <form action="{{ route('Jugador.destroy', $jugador->id) }}" method="POST" style="display:inline;">
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