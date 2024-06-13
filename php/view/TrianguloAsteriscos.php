<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triángulo Equilátero de Asteriscos</title>
    <style>
        .triangle {
            font-family: monospace;
            white-space: pre;
        }
    </style>
</head>
<body>
    <h1>Triángulo Equilátero de Asteriscos</h1>
    <form action="" method="post">
        <label for="size">Tamaño del triángulo:</label>
        <input type="number" id="size" name="size" required min="1">
        <br>
        <input type="submit" value="Generar Triángulo">
        <input type="reset" value="Limpiar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $size = intval($_POST['size']);
        
        function generarTrianguloEquilatero($size) {
            $triangulo = "";
            for ($i = 1; $i <= $size; $i++) {
                $triangulo .= str_repeat(' ', $size - $i);
                $triangulo .= str_repeat('*', 2 * $i - 1);
                $triangulo .= "\n";
            }
            return $triangulo;
        }

        $triangulo = generarTrianguloEquilatero($size);

        echo "<pre class='triangle'>" . htmlspecialchars($triangulo) . "</pre>";
    }
    ?>
</body>
</html>
