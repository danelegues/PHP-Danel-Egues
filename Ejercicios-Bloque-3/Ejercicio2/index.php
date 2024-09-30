
<?php
session_start();

if(isset($_SESSION["usuario"])) {
    header("Location: pagina.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Iniciar sesion: </h1>
    <form action="pagina.php" method="POST">
        <label for="usuario"> Ingrese su nombre de usuario: </label>
        <input type="text" id="usuario" name="usuario" required>

        <label for="contraseña">Ingrese su contraseña</label>
        <input type="text" id="contraseña" name="contraseña" required>

        <input type="submit">
    </form>



    <?php

    ?>
</body>
</html>