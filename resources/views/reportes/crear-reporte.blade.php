<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Reporte</title>
</head>
<body>
    <h1>Crea tu reporte:</h1>
    <form action="{{ route('reportes.store') }}" method="POST">
        @csrf
        <div>
            <label for='descripcion'>Descripción:</label>
            <input type="text" name="descripcion" id="descripcion" cols='30' required>
        </div>
        <div>
            <label for="ubicacion">Ubicación:</label>
            <input type="text" name="ubicacion" id="ubicacion" required>
        </div>
        <div>
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" id="descripcion"></textarea>
        </div>
        <div>
            <label for="fecha_inicio">Fecha de Inicio:</label>
            <input type="date" name="fecha_inicio" id="fecha_inicio" required>
        </div>
        <div>
            <label for="folio">Folio:</label>
            <input type="text" name="folio" id="folio">
        </div>
        <button type="submit">Crear Reporte</button>
    </form>
</body>
</html>