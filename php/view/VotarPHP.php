<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Derecho a Voto</title>
</head>
<body>
    <h1>Verificar Derecho a Voto</h1>
    <form action="" method="post">
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required>
        <br><b></b>
        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" required>
            <option value="hombre">Hombre</option>
            <option value="mujer">Mujer</option>
        </select>
        <br><br>
        <input type="submit" value="Verificar">
        <input type="reset" value="Limpiar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $edad = $_POST['edad'];
        $sexo = $_POST['sexo'];

        // Verificar si la persona puede votar
        function puedeVotar($edad) {
            return $edad >= 18;
        }

        $resultado = puedeVotar($edad) ? "puede votar" : "no puede votar";

        echo "<h2>La persona de sexo " . htmlspecialchars($sexo) . " con " . htmlspecialchars($edad) . " años " . $resultado . ".</h2>";
    }
    ?>
</body>
</html>
