<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Introduce un archivo</h2>
    <form action="ejercicio04.php" method="post" enctype="multipart/form-data">
        Archivo
        <input type="file" name="fileToUpload" id="fileToUpload"/><br><br>
        <input type="submit" value="Enviar" name="submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
      }else {
        echo "Sorry, there was an error uploading your file.";
    }
    }
    ?>
</body>
</html>