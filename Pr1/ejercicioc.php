<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numpares = 0;
        $pares = 18;
        $impares = 13;
        $numimpares = 0;

        for ($numpares = 0; $numpares < $pares; $numpares++) {
            if($numpares %2 == 0){
                echo($numpares) . ",";
            }
        }

        echo"<br>";

        while ($impares > $numimpares) {
            echo($impares . ",");
            $impares--;
        }
        
        $impares = 13;
        echo"<br>";
        
        if ($impares < $pares) {
            do {
                echo $impares . ", ";
                $impares++;
            } while ($impares <= $pares);
                $impares--;
            } 
        else {
            echo ($impares);
        }
            
    ?>
</body>
</html>