<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Reporte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4" style="max-width: 600px;">
    <h2 class="mb-4">Crea tu reporte:</h2>
    <form action="{{ route('reporte.store') }}" method="POST">
        @csrf
        <div class= "mb-3">
            <label class= "form-label" for='descripcion'>Descripción:</label>
            <input type="text" name="descripcion" id="descripcion" cols='30' required>
        </div>

        <div class="mb-3">
            <label class="form-label" for="ubicacion">Ubicación:</label>
            <input type="text" name="ubicacion" id="ubicacion" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="fecha_inicio">Fecha de Inicio:</label>
            <input type="date" name="fecha_inicio" id="fecha_inicio" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="folio">Folio:</label>
            <input type="text" name="folio" id="folio">
        </div>
        <button type="submit">Crear Reporte</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>