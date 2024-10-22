<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario</title>
</head>
<body>
    <h1>Rellena el siguiente formulario</h1>
    <form action="" method="post">
        <label for="nombreUser">Nombre de usuario</label>
        <input type="text" id="nombreUser" name="nombreUser" required>
        <br>
        <label for="emailUser">Email del usuario</label>
        <input type="email" id="emailUser" name="emailUser" required>
        <br>
        <label for="passwdUser">Contraseña</label>
        <input type="password" id="passwdUser" name="passwdUser" required>
        <br>
        <label for="repetirPasswd">Repita la contraseña</label>
        <input type="password" id="repetirPasswd" name="repetirPasswd" required>
        <br>
        <button type="submit">Registrar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "db";
        $username = "root";
        $password = "root";
        $database = "mydatabase";

        $conn = new mysqli($servername, $username, $password, $database);

        if($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        $nombreUser = htmlspecialchars($_POST['nombreUser']);
        $emailUser = htmlspecialchars($_POST['emailUser']);
        $passwdUser = htmlspecialchars($_POST['passwdUser']);
        $repetirPasswd = htmlspecialchars($_POST['repetirPasswd']);

        if ($passwdUser !== $repetirPasswd) {
            echo "<p style='color: red;'>Las contraseñas no coinciden. Por favor, inténtalo de nuevo.</p>";
        } else {
            
            $checkUser = "SELECT emailUser FROM Usuarios WHERE emailUser = ?";
            $stmt = $conn->prepare($checkUser);
            $stmt->bind_param("s", $emailUser);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                echo "<p style='color: red;'>Este email ya está registrado. Usa otro email.</p>";
            } else {
               
                $sql = "INSERT INTO Usuarios (emailUser, nombreUser, passwdUser) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sss", $emailUser, $nombreUser, $passwdUser);

                if ($stmt->execute()) {
                    echo "<p style='color: green;'>Usuario registrado con éxito: $nombreUser</p>";
                } else {
                    echo "<p style='color: red;'>Error al registrar el usuario: " . $conn->error . "</p>";
                }
            }

            $stmt->close();
        }

        $conn->close();
    }
    ?>
</body>
</html>
