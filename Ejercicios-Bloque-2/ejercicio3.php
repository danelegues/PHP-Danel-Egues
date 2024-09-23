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
            <input type="text id="emailUser" name="emailUser" required>

            <label for="passwdUser"> Contraseña del usuario </label>
            <input type="password" id="passwdUser" name="passwdUser" required>

            <label for="repetirPasswd"> Repita la contraseña </label>
            <input type="password" id="repetirPasswd" name="repetirPasswd" required>

            <button type="submit">Registrar</button>

           </form>
           
           <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                   if(isset($_POST['nombreUser']) && isset($_POST['emailUser']) && isset($_POST['emailUser']) && isset($_POST['passwdUser'])) 
                }
                


        
</body>
</html>