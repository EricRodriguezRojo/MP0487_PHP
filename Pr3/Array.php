<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo "<h3>Ejercicio 1</h3>";
    $datos = array("nombre: " => "Sara", "apellido: " => "Martinez", "edad: " => "23", "ciudad: " => "Barcelona");
    $cont = 1;
    foreach ($datos as $value) {
        echo "Dato$cont º: $value <br>";
        $cont++;
    }
    echo "<br>";


    echo "<h3>Ejercicio 2</h3>";
    $datos2 = array("nombre: " => "Sara", "apellido: " => "Martinez", "edad: " => "23", "ciudad: " => "Barcelona");
    $cont2 = 1;
    foreach ($datos2 as $key => $value) {
        echo "$key $value <br>";
        $cont2++;
    }
    echo "<br>";


    echo "<h3>Ejercicio 3</h3>";
    $datos3 = array("nombre" => "Sara", "apellido" => "Martinez", "edad" => "23", "ciudad" => "Barcelona");
    $cont3 = 1;
    $datos3["edad"] = 24;
    foreach ($datos3 as $key => $value) {
        echo "$key: $value <br>";
        $cont3++;
    }    
    echo "<br>";


    echo "<h3>Ejercicio 4</h3>";
    $datos = array("nombre" => "Sara", "apellido" => "Martinez", "edad" => "23", "ciudad" => "Barcelona");
    $datos["edad"] = 24;
    unset($datos["ciudad"]);
    echo var_dump($datos);
    echo "<br>";
    echo "<br>";


    echo "<h3>Ejercicio 5</h3>";
    $letters  = "a,b,c,d,e,f";
    $array = explode(",", string: $letters);
    arsort(array: $array);
    $cont = 6;
    foreach ($array as $letters) {
        echo "letter $cont º: $letters <br>";
        $cont--;
    }    
    echo "<br>";


    echo "<h3>Ejercicio 6</h3>";
    $datos = array("Miguel" => "5", "Luis" => "7", "Marta" => "10", "Isabel" => "8", "Aitor" => "4", "Pepe" => "1");
    arsort( $datos);
    echo "Notas de estudiante: ";
    foreach ($datos as $key => $value) {
        echo "$key: $value ";
    }    
    echo "<br>";


    echo "<h3>Ejercicio 7</h3>";    
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
    echo "<br>";


    echo "<h3>Ejercicio 8</h3>";   
    $datos = array("Miguel" => "5", "Luis" => "7", "Marta" => "10", "Isabel" => "8", "Aitor" => "4", "Pepe" => "1");
    arsort(array: $datos);
    foreach($datos as $key => $value){
        echo "La nota mas alta es $value y el mejor alumno es $key";
        break;
    }
    echo "<br>";
    

    echo "<h3>Ejercicio 9</h3>";   
    $datos = array("Miguel" => "5", "Luis" => "7", "Marta" => "10", "Isabel" => "8", "Aitor" => "4", "Pepe" => "1");
    arsort(array: $datos);
    foreach($datos as $key => $value){
        echo "La nota mas alta es $value y el mejor alumno es $key";
        break;
    }
    echo "<br>";
    ?>
</body>
</html>