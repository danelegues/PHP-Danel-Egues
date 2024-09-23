<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="get" action="">
        <label for="numero1"> Numero 1:</label>
        <input type="text" id="numero1" name="numero1" required>
        <br>
        <label for="numero2">Numero 2:</label>
       <input type="text" id="numero2" name="numero2" required>

        <input type="submit" value="Sumar
    </form>

    <?php
        if(isset($_GET['numero 1']) && isset($_GET['numero 2'])){
            $numero1 = $_GET['numero 1'];
            $numero2 = $_GET['numero 2'];
            $suma = $numero1 + $numero2;
            echo "El resultado de la suma es: $suma";
        }
    ?>


</body>
</html>