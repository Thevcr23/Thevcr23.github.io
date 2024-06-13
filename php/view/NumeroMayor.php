<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Encontrar el Número Mayor</title>
</head>
<body>
    
    <h1>Encontrar el Número Mayor</h1>
    <form action="" method="post">
        <label for="numero1">Número 1:</label>
        <input type="number" id="numero1" name="numero1" required>
        <br><br>
        <label for="numero2">Número 2:</label>
        <input type="number" id="numero2" name="numero2" required>
        <br><br>
        <label for="numero3">Número 3:</label>
        <input type="number" id="numero3" name="numero3" required>
        <br><br>
        <input type="submit" value="Encontrar el Mayor">
        <input type="reset" value="Limpiar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $numero3 = $_POST['numero3'];

        // Función para encontrar el mayor de tres números
        function encontrarMayor($num1, $num2, $num3) {
            return max($num1, $num2, $num3);
        }

        // Calcular el mayor de los tres números
        $mayor = encontrarMayor($numero1, $numero2, $numero3);

        echo "<h2>El mayor de los números " . htmlspecialchars($numero1) . ", " . htmlspecialchars($numero2) . ", y " . htmlspecialchars($numero3) . " es: " . htmlspecialchars($mayor) . "</h2>";
    }
    ?>
</body>
</html>
