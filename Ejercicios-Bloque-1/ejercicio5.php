<?php

$edad = 9;
$altura = 110;
$acompañado = false;

if( $edad >= 10 || $altura >= 120){
    echo "El niño puede entrar ya que es mayor de 10 años o mide mas de 120cm";
}
elseif($acompañado == true && $edad >=6){
    echo "El niño puede entrar ya que esta acompañado y es mayor de 6 años";
}
else{ 
    echo "El niño no puede entrar ya que no cumple ningun requisito";
}