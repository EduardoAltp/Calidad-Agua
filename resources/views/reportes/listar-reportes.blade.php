<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Reportes</title>
</head>
<body>
    <h1>Lista de Reportes:</h1>
   @if (session('success'))
    <div style="color: green;">{{ session('success') }}</div>
@endif

<a href="{{ route('reporte.create') }}">Nuevo reporte</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Ubicación</th>
            <th>Descripción</th>
            <th>Fecha inicio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($reportes as $reporte)
            <tr>
                <td>{{ $reporte->id }}</td>
                <td>{{ $reporte->ubicacion }}</td>
                <td>{{ $reporte->descripcion }}</td>
                <td>{{ $reporte->fecha_inicio }}</td>
                <td>
                    <a href="{{ route('reporte.edit', $reporte) }}">Editar</a>

                    <form action="{{ route('reporte.destroy', $reporte) }}" method="POST"
                          style="display:inline"
                          onsubmit="return confirm('¿Eliminar este reporte?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No hay reportes todavía.</td>
            </tr>
        @endforelse
    </tbody>
</table>
</body>

</html>