<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $datos = array("Miguel" => "5", "Luis" => "7", "Marta" => "10", "Isabel" => "8", "Aitor" => "4", "Pepe" => "1");
    arsort( $datos);
    echo "Notas de estudiante: ";
    foreach ($datos as $key => $value) {
        echo "$key: $value ";
    }    
    ?>
</body>
</html>