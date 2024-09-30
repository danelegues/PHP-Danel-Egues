<?php
session_start();


if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_unset();
    session_destroy();
    header("Refres:0");
    exit();
}else{
    
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
    
</body>
</html>