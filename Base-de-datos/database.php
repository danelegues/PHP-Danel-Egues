<?php
$servername = "db";
$username = "root";
$password = "root";
$database = "mydatabase";

$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


$tablaUsuario = "CREATE TABLE IF NOT EXISTS Usuarios (
                emailUser VARCHAR(100) NOT NULL PRIMARY KEY,
                nombreUser VARCHAR(100) NOT NULL,
                passwdUser VARCHAR(255) NOT NULL)"; 
if ($conn -> query($tablaUsuario) === TRUE) {
    echo "Tabla creada exitosamente";
} else {
    echo "Error creando tabla: " . $conn->error;
}

$conn->close(); 

