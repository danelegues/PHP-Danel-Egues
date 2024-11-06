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

    if ($conn->query($tablaUsuario) === TRUE) {
        echo "Tabla Usuarios creada exitosamente<br>";
    } else {
        echo "Error creando la tabla Usuarios: " . $conn->error . "<br>";
    }

    $tablaPeliculas = "CREATE TABLE IF NOT EXISTS Peliculas (
                    usuario VARCHAR(100) NULL,
                    ISAN INT(8),
                    nombrePelícula VARCHAR(100) NOT NULL PRIMARY KEY,
                    puntuacionPelícula INT(11),
                    año INT(11),
                    INDEX(usuario),
                    FOREIGN KEY (usuario) REFERENCES Usuarios(nombreUser)
                    ON DELETE RESTRICT ON UPDATE RESTRICT)";

    if ($conn->query($tablaPeliculas) === TRUE) {
        echo "Tabla Peliculas creada exitosamente";
    } else {
        echo "Error creando la tabla Peliculas: " . $conn->error;
    }

    $conn->close();
?>
