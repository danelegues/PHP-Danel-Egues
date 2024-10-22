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
        .container {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 20px;
        }
        .container a {
            text-decoration: none;
            color: white;
        }
        .header {
            background-color: #171A21;
            padding: 20px;
            
        }
        .center {
            padding: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        input[type="radio"] 
    {
    display: none;
    } 

      label {
        color: grey;
      }

      .clasificacion {
        direction: rtl;
        unicode-bidi: bidi-override;
      }

      label:hover,
      label:hover ~ label {
        color: orange;
      }

      input[type="radio"]:checked ~ label {
        color: orange;
      }
       
    </style>
</head>
<body>
<div class="header">

    <div class="container">
        
        <img src="img/logo" alt="">
        <h3 style="color:white;">Peliculas</h3>
        <a href="index.php">Inicio</a>
        <a href="puntuar.php">Puntuar pelicula</a>
    </div>
</div>
<div class="center">
    <form action="" method="POST">
        <label for="NombrePelicula">Nombre de la Pelicula:</label>
        <br><br>
        <input type="text" name="NombrePelicula" id="NombrePelicula" required>

        <br><br>

        <label for="puntuacion">Ingrese la puntuacion del 1 al 5: </label>
        <p class="clasificacion">
        <input id="radio1" type="radio" name="estrellas" value="5">
        <label for="radio1">★</label>
        
        <input id="radio2" type="radio" name="estrellas" value="4">
        <label for="radio2">★</label>
        
        <input id="radio3" type="radio" name="estrellas" value="3">
        <label for="radio3">★</label>
        
        <input id="radio4" type="radio" name="estrellas" value="2">
        <label for="radio4">★</label>
        
        <input id="radio5" type="radio" name="estrellas" value="1">
        <label for="radio5">★</label>

      </p>

        <label for="ISAN"> ISAN:</label>
        <br><br>
        <input type="text" name="ISAN" id="ISAN" required">
        <br><br>

        <label for="año"> Año:</label>
        <br><br>
        <input type="text" name="añoPelicula" id="añoPelicula" required">
        <br><br>

        <input type="submit">
    </form>
</div>
      <?php
          if($_SERVER["REQUEST_METHOD"] == "POST") {
            $servername = "db";
            $username = "root";
            $password = "root";
            $database = "mydatabase";


            $conn = new mysqli($servername, $username, $password, $database);

            if($conn -> connect_error){

              die("Conexion fallida") . $conn -> connect_error;
            }

              $nombrePelicula = $_POST['NombrePelicula'];
              $puntuacionPelicula = $_POST['estrellas'];
              $año = $_POST['añoPelicula'];
              $ISAN = $_POST['ISAN'];
            
            
            if (isset($nombrePelicula) && isset($ISAN) && isset($puntuacionPelicula) && isset($año)){  
              $sqlInsert = "INSERT INTO Peliculas (nombrePelicula, puntuacionPelicula, año, ISAN) VALUES ('$nombrePelicula', '$puntuacionPelicula', '$año','$ISAN')";
              
              if($conn->query($sqlInsert) === TRUE) {
                echo "<p style = 'color:green;'> ¡Ya se ha puntuado la pelicula $nombrePelicula ! </p>";

                if($conn->errno == 1062){
                  echo "<p style = 'color:red>'> Este usuario ya ha puntuando esta pelicula</p>";
                }
              }
            }
          }
      ?>
</body>
</html>