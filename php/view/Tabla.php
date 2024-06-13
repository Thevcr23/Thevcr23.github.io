<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Tabla de Multiplicar</h1>
    <form action="" method="post">
        <label for="numero">Número:</label>
        <input type="number" id="numero" name="numero" required>
        <br>
        <input type="submit" value="Generar Tabla">
        <input type="reset" value="Limpiar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];

        echo "<h2>Tabla de multiplicar del número " . htmlspecialchars($numero) . ":</h2>";
        echo "<table>";
        
        for ($fila = 0; $fila < 5; $fila++) {
            echo "<tr>";
            for ($columna = 1; $columna <= 5; $columna++) {
                $multiplicador = $fila * 5 + $columna;
                $resultado = $numero * $multiplicador;
                echo "<td>$numero x $multiplicador = $resultado</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    }
    ?>
</body>
</html>
