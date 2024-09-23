<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Rellena el siguiente formulario</h1>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
            
            <label for="nombreUser">Nombre del usuario: </label>
            <input type="text" id="nombreUser" name="nombreUser" required>


            <label for="correoUser">Ingrese su correo electronico</label>
            <input type="text" id="correoUser" name="correoUser" required>

            <label for="password"> Ingrese una contraseña</label>
            <input type="text" id ="contraUser" name="contraUser" required>

            <label for="confirmPass"> Repita la contraseña</label>
            <input type="text" id="confirmPass" name="confirmPass" required>
            
        </form>

        <?php
        $expresionRegular =  
            
            if($SERVER["REQUEST_METHOD"] == "POST"){
                if(isset($_POST["nombreUser"]) && isset($_POST["correoUser"]) && isset($_POST["contraUser"]) && isset($_POST["confrimPass"]) 
                && $_POST["nombreUser"] < 6){
                    
                }
                else{
                    echo "Ingrese datos en todos los campos"
                }
            }

</body>
</html>