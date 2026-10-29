<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Reporte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4" style="max-width: 600px;">
    <h2 class="mb-4">Editar reporte</h2>

    <form action="{{ route('reporte.update', $reporte) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Ubicación</label>
            <input type="text" name="ubicacion" class="form-control"
                   value="{{ old('ubicacion', $reporte->ubicacion) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Descripción</label>
            <textarea name="descripcion" class="form-control" rows="4">{{ old('descripcion', $reporte->descripcion) }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Fecha de inicio</label>
            <input type="date" name="fecha_inicio" class="form-control"
                   value="{{ old('fecha_inicio', $reporte->fecha_inicio) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar cambios</button>
        <a href="{{ route('reporte.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>