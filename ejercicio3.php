<?php 
$edad = 40;

for($i = 0; $i < 90; $i +=10){
    if( $edad >= $i && $edad <=$i+10){
        $rangoInferior = $i;
        $rangoSuperior = $i+10;
    }
}

echo "La edad de $edad años esta en el rango de $rangoInferior a $rangoSuperior";