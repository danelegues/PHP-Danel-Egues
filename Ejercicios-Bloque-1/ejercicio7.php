<?php
$numero = 12;

if ($numero % 2 == 0){
   $resultado = $numero / 2;
}
else{
    $resultado = $numero * 3 + 1;
}

echo "El resultado final es $resultado";