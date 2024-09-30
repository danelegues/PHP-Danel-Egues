<?php
$cookie_name = "contador";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    setcookie($cookie_name, "", time() -3600);
    header("Refresh:0");
}
else{
    if(!isset($_COOKIE[$cookie_name])) {
        $cookie_value = 0; 
    } else{
       $cookie_value = $_COOKIE[$cookie_name];
       $cookie_value++;
    
    }
    setcookie($cookie_name, $cookie_value);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <h1>Contador de Visitas: </h1>
<?php
    
    if($cookie_value == 0) {
        echo "Es tu primera visita.";
    } else {
        echo "Has entrado " . $cookie_value . " veces.";
    }


?>
    <form action="ejercicio1.php" method="POST">
        <button type="submit" name="reset"> Reiniciar contador</button>
    </form>

</body>
</html>