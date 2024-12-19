<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $datos = array("nombre" => "Sara", "apellido" => "Martinez", "edad" => "23", "ciudad" => "Barcelona");
    $cont = 1;
    $datos["edad"] = 24;
    foreach ($datos as $key => $value) {
        echo "$key: $value <br>";
        $cont++;
    }
    
    ?>
</body>
</html>