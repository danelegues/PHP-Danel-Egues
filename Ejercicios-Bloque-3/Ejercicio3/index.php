<?php

    $cockie_tema = isset($_COOKIE["tema"]) ? $_COOKIE["tema"] : "claro";
    $cockie_idioma = isset($_COOKIE["idioma"]) ? $_COOKIE["idioma"] : "castellano";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">+
    <?php 
        if($_COOKIE["tema"] == "oscuro"){
            echo data-bs-theme="dark";
        }
    ?>
    <title>Document</title>
</head>


<body>
    <form action="guardar.php" method="POST">
        
        if( isset($_COOKIE["idioma"]) && $_COOKIE["idioma"] == "euskera"){
            <div style="border: 2px solid #333;">
                <h1>Ongi Etorri!</h1>
                <div style="border: 2px solid #333;">
                    <h3>Hautatu kolorea</h3>
                    <div style="border: 2px solid #333;">
                        <a href="">Argia</a>
                    </div>
                    <div style="border: 2px solid #333;">
                        <a href="">Iluna</a>
                    </div>
                </div>

                <div style="border: 2px solid #333;">
                    <h3>Hautatu hizkuntza</h3>
                    <div style="border: 2px solid #333;">
                        <a href="">Gaztelania</a>
                    </div>
                    <div style="border: 2px solid #333;">
                        <a href="">Euskera</a>
                    </div>
                </div>
            </div>  
        }else{
            <div style="border: 2px solid #333;">
                <h1>Bienvenido!</h1>
                <div style="border: 2px solid #333;">
                    <h3>Elige el tema</h3>
                    <div style="border: 2px solid #333;">
                        <a href="">Claro</a>
                    </div>
                    <div style="border: 2px solid #333;">
                        <a href="">Oscuro</a>
                    </div>
                </div>

                <div style="border: 2px solid #333;">
                    <h3>Elige idioma</h3>
                    <div style="border: 2px solid #333;">
                        <a href="">Castellano</a>
                    </div>
                    <div style="border: 2px solid #333;">
                        <a href="">Euskera</a>
                    </div>
                </div>
            </div>  
        }
      

    </form>
</body>
</html>