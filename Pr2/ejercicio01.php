<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h2>Datos Personales</h2>
    <form method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br><br>
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" required><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = htmlspecialchars($_POST['nombre']);
        $apellido = htmlspecialchars($_POST['apellido']);

        echo "<h3>Nombre: $nombre</h3>";
        echo "<h3>Apellido: $apellido</h3>";
        }
    ?>
</body>

