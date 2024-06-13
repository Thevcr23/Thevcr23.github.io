<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
   
    <title>Calcular Área de un Círculo</title>
</head>
<body>
    <h1>Calcular Área de un Círculo</h1>
    <form action="" method="post">
        <label for="radio">Radio:</label>
        <input type="number" step="0.01" id="radio" name="radio" required>
        <br>
        <input type="submit" value="Calcular Área">
        <input type="reset" value="Limpiar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $radio = $_POST['radio'];

        // Función para calcular el área del círculo
        function calcularAreaCirculo($radio) {
            return pi() * pow($radio, 2);
        }

        // Calcular el área del círculo
        $area = calcularAreaCirculo($radio);

        echo "<h2>El área del círculo con radio " . htmlspecialchars($radio) . " es: " . htmlspecialchars($area) . "</h2>";
    }
    ?>
</body>
</html>
