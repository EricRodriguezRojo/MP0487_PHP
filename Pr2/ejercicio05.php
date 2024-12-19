<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Introduce 2numeros entre 0 y 20</h2>
    <form method="post">
        <label for="nom">Nombre:</label>
        <input type="text" name="nom" id="nom"/><br><br>
        <label for="num1">numero 1:</label>
        <input type="number" name="num1" id="num1"/><br><br>
        <label for="num2">numero 2:</label>
        <input type="number" name="num2" id="num2"/><br><br>
        <input type="submit" value="Enviar"><br><br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST["nom"]);
    $num1 = htmlspecialchars($_POST["num1"]);
    $num2 = htmlspecialchars($_POST["num2"]);
    
    echo "Welcome " . $nom . "!" ."</br>"; 

    if($num1>$num2){
        for ($i=$num1; $num2-1 < $i; $i--) { 
            if ($num1 % 2 == 0) {
                if ($i % 2 == 0){
                    echo "<div style='color: green'>$i</div> ";
                }else{
                    echo "<div style='color: yellow'>$i</div> ";
                }
            }else{
                if ($i % 2 == 0){
                    echo "<div style='color: green'>$i</div> ";
                }else{
                    echo "<div style='color: yellow'>$i</div> ";
                }
            }
        }
    }else{
        for ($i=$num2; $num1-1 < $i; $i--) { 
            if ($num2 % 2 == 0) {
                if ($i % 2 == 0){
                    echo "<div style='color: green'>$i</div>";
                }else{
                    echo "<div style='color: yellow'>$i</div> ";
                }
            }else{
                if ($i % 2 == 0){
                    echo "<div style='color: green'>$i</div> ";
                }else{
                    echo "<div style='color: yellow'>$i</div> ";
                }
            }
        }
    }
    }


    ?>
</body>
</html>