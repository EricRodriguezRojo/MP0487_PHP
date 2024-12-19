<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $suma = 0;
        $numpares = 0;
        $numimpares = 0;
        while (100 > $suma) {
            $numAleatorio = rand(0, 20);
            echo "Numero aleatorio: " .  $numAleatorio;
            echo "<br>";
            $suma = $numAleatorio + $suma;

            if ($numAleatorio % 2 == 0) {
                $numpares++;
            } else {
                $numimpares++;
            }
        }

        echo "La suma de todos los numeros aleatorios es de: " . $suma;
        echo "<br>";
        echo "Hay " . $numpares . " numeros pares";
        echo "<br>";
        echo "Hay " . $numimpares . " numeros impares";

    ?>
</body>
</html>