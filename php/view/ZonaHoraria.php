<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fecha y Hora Actual</title>
</head>
<body>
    <h1>Fecha y Hora Actual en la Zona Horaria America/Lima</h1>

    <?php
    date_default_timezone_set('America/Lima');
    $fechaHoraActual = date('Y-m-d H:i:s');
    echo "<p>La fecha y hora actual en la zona horaria America/Lima es: $fechaHoraActual</p>";
    ?>

</body>
</html>
