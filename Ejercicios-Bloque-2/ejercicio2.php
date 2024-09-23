    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Juego de adivinar el numero</h1>
    <form method="get" action="">
        <label for="numeroUser"> Dame un numero del 1 al 5 </label>
        <input type="text" id="numeroUser" name="numeroUser" min="1" max="5" required>
        <button type="submit">Enviar</button>

        <?php
            if(isset($_GET['numeroUser'])){
                $numeroUser = $_GET['numeroUser'];
                $numeroRandom = rand(1,5);
            }
            echo "<p> Tu numero: $numeroUser <p>";
            echo "<p> Numero aleatorio: $numeroRandom <p>";
            if($numeroUser == $numeroRandom){
                echo "<p>Felicidades has hacertado! </p>";
            }else{
                echo "<p> No has acertado. <p>";
            }
        ?>
    </form>

</body>
</html>