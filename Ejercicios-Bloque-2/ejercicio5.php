<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #form {
  width: 250px;
  margin: 0 auto;
  height: 50px;
}

#form p {
  text-align: center;
}

#form label {
  font-size: 20px;
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
    <h1>Formulario de valoraciones y comentarios</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

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

        <label for="comentario"> Comentario:</label>
        <textarea name="comentario" id="comentario" rows="4" cols="50" required></textarea>

        <input type="submit">

      <?php

  

    if($_SERVER["REQUEST_METHOD"] == "POST"){

      $estrellas = htmlspecialchars($_POST['estrellas']);
      $comentario = htmlspecialchars($_POST['comentario']);
    }
    

      if(!empty($estrellas) && !empty($estrellas)){
    
        echo "<h2> Gracias por su valoracion </h2> ";
        echo "<p> Valoracion : $estrellas </p> ";
        echo "<p> Comentario : $comentario </p> ";
      }
      else{
        echo "<p> Rellene todos lo campos por favor <p>";
        }
      ?>
    </form>



</body>
</html>