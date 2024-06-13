<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario suma</title>
</head>
<body>
    <h2>Suma de 2 numeros PHP</h2>
    
    <form action="suma.php" method="POST">
        <table>
        <tr>
            <td>
                <label for="">Numero 1</label>
                <input type="text" name="num1">
            </td>
       
        </tr>

        <tr>
        <td>
                <label for="">Numero 2</label>
                <input type="text" name="num2">
            </td>
        </tr>
        <tr>
            <td>
                <input type="Submit" value="Sumar">
            </td>
        </tr>
        </table>
    </form>
    
</body>
</html>


<?php
if ($_POST) 
{
    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];
    $suma = $n1 + $n2;
    echo "La suma de" . $n1 . " y " . $n2 . "es" . $suma;



    
}

?>