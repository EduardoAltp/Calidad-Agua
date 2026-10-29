<html lang="en">

<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Reportes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">Mis reportes</h2>
        <a href="{{ route('reporte.create') }}" class="btn btn-primary">Nuevo reporte</a>
    </div>

 <div class="table-responsive">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Ubicación</th>
                    <th>Descripción</th>
                    <th>Fecha inicio</th>
                    <th class="text-end">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($reportes as $reporte)
                    <tr>
                        <td>{{ $reporte->id }}</td>
                        <td>{{ $reporte->ubicacion }}</td>
                        <td>{{ $reporte->descripcion }}</td>
                        <td>{{ $reporte->fecha_inicio }}</td>
                        <td class="text-end">
                            <a href="{{ route('reporte.edit', $reporte) }}" class="btn btn-sm btn-warning">Editar</a>

                            <form action="{{ route('reporte.destroy', $reporte) }}" method="POST"
                                  class="d-inline"
                                  onsubmit="return confirm('¿Eliminar este reporte?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted">No hay reportes todavía.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>