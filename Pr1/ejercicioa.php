<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php
    $variableA = 4;
    $variableB = 5;
    $base = $variableA;
    $altura = $variableB;
    $suma = $variableA+$variableB;
    $resta = $variableA-$variableB;
    if ($variableA > 1 && $variableB > 1) {
        echo ("The numbers are " . $variableA . " and " . $variableB . "<br>");
        echo ("The sum of " . $variableA . "+" . $variableB . "=" . $suma . "<br>");
        echo ("The substraction of " . $variableA . "-" . $variableB . "=" . $resta . "<br>");
        echo ("The triangle area is: " . $areatriangulo = $base*$altura/2);
    }
    ?>
</body>

