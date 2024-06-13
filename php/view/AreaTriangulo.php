<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Área de un Triángulo</title>
</head>
<body>
    <h1>Calcular Área de un Triángulo</h1>
    <form action="" method="post">
        <label for="base">Base:</label>
        <input type="number" id="base" name="base" required>
        <br><br>
        <label for="altura">Altura:</label>
        <input type="number" id="altura" name="altura" required>
        <br><br>
        <input type="submit" value="Calcular Área">
        
        
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $base = $_POST['base'];
        $altura = $_POST['altura'];

        // Clase Triangulo
        class Triangulo {
            private $base;
            private $altura;

            public function __construct($base, $altura) {
                $this->base = $base;
                $this->altura = $altura;
            }

            public function calcularArea() {
                return 0.5 * $this->base * $this->altura;
            }
        }

        // Crear una instancia de Triangulo y calcular el área
        $triangulo = new Triangulo($base, $altura);
        $area = $triangulo->calcularArea();

        echo "<h2>El área del triángulo con base " . htmlspecialchars($base) . " y altura " . htmlspecialchars($altura) . " es: " . htmlspecialchars($area) . "</h2>";
    }
    ?>
</body>
</html>
