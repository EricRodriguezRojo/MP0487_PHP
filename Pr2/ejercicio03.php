<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h2>Introduce 2numeros entre 0 y 20</h2>
    <form method="post">
        <label for="num1">numero 1:</label>
        <input type="number" name="num1" id="num1" min="0" max="20"/><br><br>
        <label for="num2">numero 2:</label>
        <input type="number" name="num2" id="num2" min="0" max="20"/><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = htmlspecialchars($_POST["num1"]);
    $num2 = htmlspecialchars($_POST["num2"]);


        if ($num1 < 0 || $num1 > 20 || $num2 < 0 || $num2 > 20) {
            $error = "Por favor, introduce números entre 0 y 20.";
        } else {
            if($num2>$num1){
                echo "<h3>Lista de menor a mayor</h3><ul>";
                for ($i = $num1; $i <= $num2; $i++) {
                    echo "<li style='color: blue'>$i</li>";
                }
                echo "</ul>";
                
                echo "<h3>Lista de mayor a menor</h3><ul>";
                for ($i = $num2; $i >= $num1; $i--) {
                    echo "<li style='color: red'>$i</li>";
                }
                echo "</ul>";
            }else{
                echo "<h3>Lista de menor a mayor</h3><ul>";
                for ($i = $num2; $i <= $num1; $i++) {
                    echo "<li style='color: blue'>$i</li>";
                }
                echo "</ul>";
                
                echo "<h3>Lista de mayor a menor</h3><ul>";
                for ($i = $num1; $i >= $num2; $i--) {
                    echo "<li <li style='color: red'>$i</li>";
                }
                echo "</ul>";
            }
        }
    }
    ?>
</body>