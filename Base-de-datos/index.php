<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Rellena el siguiente formulario</h1>
    <form action="" method="post">
        <label for="nombreUser"> Nombre de usuario </label>
        <input type="text" id="nombreUser" name="nombreUser" required>

        <label for="emailUser"> Email del usuario </label>
        <input type="email" id="emailUser" name="emailUser" required>

        <label for="passwdUser"> Contraseña del usuario </label>
        <input type="password" id="passwdUser" name="passwdUser" required>

        <label for="repetirPasswd"> Repita la contraseña </label>
        <input type="password" id="repetirPasswd" name="repetirPasswd" required>

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

            $select = "SELECT nombreUser, passwdUser";

            if ($passwdUser !== $repetirPasswd) {
                echo "<p style='color: red;'>Las contraseñas no coinciden. Por favor, inténtalo de nuevo.</p>";
            } else {
                $sql = "INSERT INTO Usuarios (nombreUser, passwdUser) VALUES (?, ?)";

                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ss", $nombreUser, $passwdUser);

                if ($stmt->execute()) {
                    echo "<p style='color: green;'>Usuario registrado con éxito: $nombreUser</p>";
                } else {
                    echo "<p style='color: red;'>Error al registrar el usuario: " . $conn->error . "</p>";
                }

                $stmt->close();
            }
            elseif {$nombreUser === (SE)}

            $conn->close();
        }
    ?>        
</body>
</html>
