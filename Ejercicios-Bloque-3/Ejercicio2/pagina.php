<?php
session_start();

$usuarioValido = "admin";
$contraseñaValida = "1234";

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

if($usuario === $usuarioValido && $contraseña === $contraseñaValida){
    $_SESSION["usuario"] = $usuario;
}

if(!isset($_SESSION["usuario"])) {
    header("Location: index.php");
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
    <h3>Has iniciado sesion correctamente</h3>
    <h1> Bienvenido, <?php echo $_SESSION["usuario"];?></h1>

    <button>
    <a href="logout.php">Cerrar sesion</a>
    </button>

    
</body>
</html>