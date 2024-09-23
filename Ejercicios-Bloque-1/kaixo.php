<?php
$numeroPisos = rand(3,10);
$numeroPuertas = rand(2,10);


$casas = array();

for($piso = 1; $piso <= $numeroPisos; $piso++){
    for($puerta = 1; $puerta <= $numeroPuertas; $puerta++){
        $idCasa = "P$piso-P$puerta";
        $casas[] = $idCasa;
    }
}

echo "<h1>Lista de Casas en la comunidad</h1>";
echo "<ul>";

foreach($casas as $casa) {
    echo "<li>Casa: $casas </li>";
}
echo "</ul>";
?>