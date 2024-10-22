<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0px;
        }
        .header {
            background-color: #171A21;
            padding: 20px;
            color: white;
        }
        .center {
            padding: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 50px;
        }   
    </style>
</head>
<body>
    <div class="header">
        <h1>Registrarse</h1>
    </div>
    <div class="center">
       <form action="" method="POST">

        <label for="nombreUser">Nombre de usuario: </label>
        <input type="text" name="nombreUser" id="nombreUser" required>
        <br>
        <br>
        <label for="contraUser">Contraseña del usuario: </label>
        <input type="password" name="contraUser" id="contraUser" required>
        <br>
        <br>
        <label for="repetirContra">Repita la contraseña: </label>
        <input type="password" name="repetirContra" id="repetirContra" required>
        <br>
        <br>
        <button type="submit"> Register</button>


        <br><br><br>
        
        <label for=""> ¡Una vez registrado inicia sesion!</label>
        <br><br>
        <a href="login.php">Log in</a>
    </form> 
    </div>
    


    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $servername = "db";
            $username = "root";
            $password = "root";
            $database = "mydatabase";
        

        $conn = new mysqli($servername, $username, $password,$database);

        if($conn->connect_error) {
            die("Conexion fallida ") . $conn->connect_error;
        }

        $nombreUser = $_POST['nombreUser'];
        $passwdUser = $_POST['contraUser'];
        $repetirContra = $_POST['repetirContra'];

        if($passwdUser !== $repetirContra) {
            echo " <p style = 'color=red;'> Las contraseñas no son iguales. </p>";
        } else {
            $sqlInsert = "INSERT INTO Usuarios (nombreUser, passwdUser) VALUES ('$nombreUser', '$passwdUser')";

            if($conn->query($sqlInsert) === TRUE) {
                echo "<p style = 'color:green;'>Registro exitoso. Puedes iniciar sesion. </p>";
            } else {

                if($conn->errno ==1062){
                    echo "<p style= 'color:red;'> Ya existe un usuario con ese nombre </p>";
                }
            }
        }
    } 
    ?>
</body>
</html>