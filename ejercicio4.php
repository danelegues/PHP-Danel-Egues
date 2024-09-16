<?php
$palabra = 'ana';
$palabraInvertida = strrev($palabra);

if ($palabra == $palabraInvertida){
    echo "La palabra $palabra es un palindromo";
}
else{
    echo "La palabra $palabra no es un palindromo";
}