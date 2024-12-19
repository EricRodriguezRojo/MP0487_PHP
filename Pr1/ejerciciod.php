<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numAleatorio = rand(1, 6);
        $resultado = sqrt($numAleatorio);
        echo "El numero aleatorio es: " . $numAleatorio;
        echo "<br>";
        echo "La raiz cuadrada de el numero aleatorio es: " . $resultado;
    ?>
</body>
</html>