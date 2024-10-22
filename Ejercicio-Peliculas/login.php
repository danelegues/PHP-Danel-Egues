<?php
session_start();

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

        $sql = "SELECT * FROM Usuarios WHERE nombreUser = '$nombreUser' AND passwdUser = '$passwdUser'";
        $result = $conn->query($sql);

        if($result->num_rows > 0) {
            header("Location:index.php");
        
            $_SESSION['nombreUser'] = $nombreUser; 
           
        } else {
            echo "<p style='color:red;'> Nombre de usuario o contraseña incorrectos. Intentalo otra vez </p>";
        }
        
        $conn->close();
        
    } 
    ?>
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
        <h1>Iniciar Sesion</h1>
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
    
        <button type="submit"> Iniciar sesion</button>


        <br><br><br>
        
        <label for=""> ¿No te has registrado aun?</label>
        <br><br>
        <a href="register.php">Registrarse</a>
    </form> 
    </div>
    


    
</body>
</html>