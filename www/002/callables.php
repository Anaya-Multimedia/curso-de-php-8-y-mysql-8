<?php
function compara($valor1, $valor2, $funcionComparacion):int{
    return $funcionComparacion($valor1, $valor2);
}

$comparaEnteros = function ($valor1, $valor2){
    if ( $valor1 > $valor1 ){
        return 1;
    }
    if ( $valor1 < $valor1 ){
        return -1;
    }
    return 0;
};

$cantidad1 = 10;
$cantidad2 = 20;
if(compara($cantidad1, $cantidad2, $comparaEnteros) == 1){
    echo "cantidad1 es mayor que cantidad2";
}