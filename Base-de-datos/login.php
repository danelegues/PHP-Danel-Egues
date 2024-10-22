<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        <h1>Login</h1>
        <label for="emailUser">Email del usuario</label>
        <input type="email" id="emailUser" name="emailUser" required>
        <br>
        <label for="passwdUser">Contraseña</label>
        <input type="password" id="passwdUser" name="passwdUser" required>
        <br>
        <button type="submit">Login</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "db";
        $username = "root";
        $password = "root";
        $database = "mydatabase";

        $conn = new mysqli($servername, $username, $password, $database);

        if($conn->connect_error){
            die("Conexión fallida: " . $conn->connect_error);
        }

        $emailUser = htmlspecialchars($_POST["emailUser"]);
        $passwdUser = htmlspecialchars($_POST["passwdUser"]);

       
        $sql = "SELECT nombreUser FROM Usuarios WHERE emailUser = ? AND passwdUser = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $emailUser, $passwdUser);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($nombreUser);
            $stmt->fetch();
            $_SESSION["usuario"] = $nombreUser;
            header("Location: index.php");
            exit();
        } else {
            echo "<p style='color:red;'>Email o contraseña incorrectos.</p>";
        }

        $stmt->close();
        $conn->close();
    }
    ?>
</body>
</html>
