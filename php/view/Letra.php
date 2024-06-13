<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar Letras en un String</title>
</head>
<body>
    <h1>Contar el Número de Veces que Aparece una Letra en un String</h1>
    <form action="" method="post">
        <label for="string">Cadena de Texto:</label>
        <input type="text" id="string" name="string" required>
        <br>
        <label for="letter">Letra a Contar:</label>
        <input type="text" id="letter" name="letter" required maxlength="1">
        <br>
        <input type="submit" value="Contar">
        <input type="reset" value="Limpiar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $string = $_POST['string'];
        $letter = $_POST['letter'];

        // Función para contar el número de veces que aparece una letra en una cadena de texto
        function contarLetra($string, $letter) {
            return substr_count($string, $letter);
        }

        // Contar el número de veces que aparece la letra
        $count = contarLetra($string, $letter);

        echo "<h2>La letra '" . htmlspecialchars($letter) . "' aparece " . htmlspecialchars($count) . " veces en la cadena de texto.</h2>";
    }
    ?>
</body>
</html>
