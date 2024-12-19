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
    $longitud = count($datos);
    $media = ($datos["Miguel"] + $datos["Luis"] + $datos["Marta"] + $datos["Isabel"] + $datos["Aitor"] + $datos["Pepe"]) / ($longitud);
    echo "Media de las notas: " . round($media, 2). "<br>";
    echo "Alumnos nota por encima de la media: <br>";

    arsort(array: $datos);
    foreach($datos as $key => $value){
        if ($media<=$value){
            echo "$key <br>";
        }
    }
    ?>
</body>
</html>