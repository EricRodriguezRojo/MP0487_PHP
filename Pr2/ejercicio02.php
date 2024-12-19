<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h2>Introduce numeros</h2>
    <form method="post">
        <label for="numero1">numero 1:</label>
        <input type="number" name="numero1" id="numero1"/><br><br>
        <label for="numero2">numero 2:</label>
        <input type="number" name="numero2" id="numero2"/><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = htmlspecialchars($_POST['numero1']);
        $numero2 = htmlspecialchars($_POST['numero2']);


        if($numero1>$numero2){
            echo "<h3>El numero $numero1 es mas grande</h3>";
        }elseif($numero1<$numero2){
            echo "<h3>El numero $numero2 es mas grande</h3>";    
        }else{
            echo "<h3>Los numeros son iguales</h3>";
        }

    }
    ?>
</body>  