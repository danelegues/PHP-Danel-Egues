<?php
$servername = "db";
$username = "root";
$password = "root";
$database = "mydatabase";

$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_error) {
    die("Conection failed:" . $conn->connect_error);
}

$tablaUsuario = "CREATE TABLE IF NOT EXISTS Usuarios (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                nombreUser VARCHAR(30) NOT NULL,
                passwdUser VARCHAR(30) NOT NULL)";



if ($conn -> query($tablaUsuario) === TRUE) {
    echo "Tabla creada exitosamente";
} else {
    echo "Error creando tabla: " . $conn->error;
}

