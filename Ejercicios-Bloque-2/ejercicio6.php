<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

        <label for="comentario">Ingrese el texto: </label>
        <textarea name="texto" id="texto" cols="50" rows="4"></textarea>

        <input type="submit">

        <?php
            function encontrarFechas($texto) {
                
                $patron = "/\d{1,2}\/\d{1,2}\/\d{2,4}/";
                $fechas = array();

                
                preg_match_all($patron, $texto, $fechas);
                
                return $fechas[0];  
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                
                $texto = htmlspecialchars($_POST["texto"]);
                $fechasEncontradas = encontrarFechas($texto);
                
                if (!empty($fechasEncontradas)) {
                    echo "<h2>Fechas encontradas</h2>";
                    echo "<ul>";


                    for ($i = 0; $i < count($fechasEncontradas); $i++) {
                        echo "<li>" . $fechasEncontradas[$i] . "</li>";
                    }

                    echo "</ul>";
                } else {
                    echo "<p>No se encontraron fechas en el texto.</p>";
                }
            }
        ?>
    </form>
</body>
</html>
