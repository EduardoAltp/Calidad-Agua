<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Reportes</title>
</head>
<body>
    <h1>Lista de Reportes:</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripción</th>
                <th>Ubicación</th>
                <th>Fecha de Inicio</th>
                <th>Folio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reportes as $reporte)
                <tr>
                    <td>{{ $reporte->id }}</td>
                    <td>{{ $reporte->user_id}}</td>
                    <td>{{ $reporte->descripcion }}</td>
                    <td>{{ $reporte->ubicacion }}</td>
                    <td>{{ $reporte->fecha_inicio }}</td>
                    <td>{{ $reporte->folio }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>