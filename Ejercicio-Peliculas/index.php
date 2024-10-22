<?php
session_start();

// Verificar si se ha solicitado cerrar la sesión.
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}

// Conexión a la base de datos.
$servername = "db";
$username = "root";
$password = "root";
$database = "mydatabase";

$conn = new mysqli($servername, $username, $password, $database);

// Comprobar si hay algún error en la conexión.
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Películas</title>
    <style>
        body {
            margin: 0px;
        }
        .container {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 20px;
        }
        .container a {
            text-decoration: none;
            color: white;
        }
        .header {
            background-color: #171A21;
            padding: 20px;  
        }
        .movie-list {
            padding: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .movie-item {
            background-color: #f4f4f4;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 10px;
            padding: 10px;
            width: 80%;
            text-align: left;
        }
        .logout-button {
            background-color: red;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer;
        }
    </style>
</head>

<body>
<div class="header">
    <div class="container">
        <img src="img/logo" alt="Logo">
        <h3 style="color:white;">Películas</h3>
        <a href="index.php">Inicio</a>
        <a href="puntuar.php">Puntuar película</a>
        <!-- Botón de Logout -->
        <form method="POST" style="display: inline;">
            <input type="submit" name="logout" value="Logout" class="logout-button">
        </form>
    </div>
</div>

<div class="movie-list">
<?php
// Consulta para obtener las películas.
$sql = "SELECT nombrePelicula, puntuacionPelicula, año, ISAN FROM Peliculas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar cada película.
    while ($row = $result->fetch_assoc()) {
        echo "<div class='movie-item'>";
        echo "<h4>" . htmlspecialchars($row["nombrePelicula"]) . "</h4>";
        echo "<p>Puntuación: " . htmlspecialchars($row["puntuacionPelicula"]) . "</p>";
        echo "<p>Año: " . htmlspecialchars($row["año"]) . "</p>";
        echo "<p>ISAN: " . htmlspecialchars($row["ISAN"]) . "</p>";
        echo "</div>";
    }
} else {
    echo "<p>No hay películas registradas.</p>";
}

// Cerrar la conexión a la base de datos.
$conn->close();
?>
</div>

</body>
</html>
