<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Agregar contactos a la agenda</h1>
    <form action="" method="POST">

        <label for="nombre"> Nombre de contacto</label>
        <input type="text" id="apellido" name="nombre" required>

        <label for="apellido"> Apellido</label>
        <input type="text" id="apellido" name="apellido" required>

        <label for="email"> Email</label>
        <input type="text" id="email" name="email" required>

        <label for="telefono">Numero de telefono</label>
        <input type="text" id="telefono" name="telefono" required>

        <button type="submit">Guardar contacto</button>

        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['email']) && isset($_POST['telefono'])){
                    
                    $contacto = array( 
                        "nombre" => $_POST['nombre'], 
                        "apellido" => $_POST['apellido'],
                        "email" => $_POST['email'],
                        "telefono" => $_POST['telefono']
                    );

                    echo "<h2> Contacto guardado </h2>";
                    echo "<pre>";
                    print_r($contacto);
                    echo "</pre>";
                }
            }
        ?>

    </form>
</body>
</html>