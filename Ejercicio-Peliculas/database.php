<?php
    $servername = "db";
    $name = "root";
    $password = "root";
    $database = "mydatabase";

    $conn = new mysqli($servername, $name, $password, $database);
    
    if($conn->connect_error) {
        die("Conexion fallida: " . $conn->connect_error);
    }

    $tablaUsuario = "CREATE TABLE IF NOT EXISTS Usuarios (
                    nombreUser VARCHAR(100) NOT NULL PRIMARY KEY,
                    passwdUser VARCHAR(255) NOT NULL)";

    if ($conn -> query($tablaUsuario) === TRUE) {
        echo "Tabla creada exitosamente";
    } else {
        echo "Error creando la tabla " . $conn->error;
    }

    $conn->close();