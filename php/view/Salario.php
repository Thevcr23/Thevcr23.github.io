<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo salario</title>
</head>
<body>
    <h1>calculo nomina salarial</h1>
    <form action="" method="post">
        <label for="tarifa">Tarifa fija por hora:</label>
        <input type="number" id="tarifa" name="tarifa" required step="0.01">
        <br>
        <label for="horas">Horas trabajadas:</label>
        <input type="number" id="horas" name="horas" required step="0.01">
        <br>
        <input type="submit" value="calcular nomina">
        <input type="reset" value="limpiar">











    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tarifa = floatval($_POST['tarifa']);
        $horas = floatval($_POST['horas']);

        // Calcular el sueldo bruto
        $horas_normales = min($horas, 35);
        $horas_extras = max($horas - 35, 0);
        $sueldo_bruto = ($horas_normales * $tarifa) + ($horas_extras * $tarifa * 1.5);

        // Calcular impuestos
        $impuestos = 0;
        if ($sueldo_bruto > 20000) {
            $impuestos = $sueldo_bruto * 0.20;
        }

        // Calcular el sueldo neto
        $sueldo_neto = $sueldo_bruto - $impuestos;

        echo "<h2>Resultado:</h2>";
        echo "<p>Tarifa Fija por Hora: $" . htmlspecialchars(number_format($tarifa, 2)) . "</p>";
        echo "<p>Horas Trabajadas: " . htmlspecialchars($horas) . "</p>";
        echo "<p>Sueldo Bruto: $" . htmlspecialchars(number_format($sueldo_bruto, 2)) . "</p>";
        echo "<p>Impuestos: $" . htmlspecialchars(number_format($impuestos, 2)) . "</p>";
        echo "<p>Sueldo Neto: $" . htmlspecialchars(number_format($sueldo_neto, 2)) . "</p>";
    }
    ?>
    
</body>
</html>