<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Reporte</title>
</head>
<body>
    <h1>Crea tu reporte:</h1>
    <form action="{{ route('reporte.update', $reporte) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Ubicación</label>
    <input type="text" name="ubicacion" value="{{ old('ubicacion', $reporte->ubicacion) }}" required>

    <label>Descripción</label>
    <textarea name="descripcion">{{ old('descripcion', $reporte->descripcion) }}</textarea>

    <label>Fecha de inicio</label>
    <input type="date" name="fecha_inicio" value="{{ old('fecha_inicio', $reporte->fecha_inicio) }}" required>

    <button type="submit">Guardar cambios</button>
    <a href="{{ route('reporte.index') }}">Cancelar</a>
</form>
</body>
</html>