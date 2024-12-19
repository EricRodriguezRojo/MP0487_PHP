<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $letters  = "a,b,c,d,e,f";
    $array = explode(",", string: $letters);
    arsort(array: $array);
    $cont = 6;
    foreach ($array as $letters) {
        echo "letter $cont º: $letters <br>";
        $cont--;
    }    
    ?>
</body>
</html>