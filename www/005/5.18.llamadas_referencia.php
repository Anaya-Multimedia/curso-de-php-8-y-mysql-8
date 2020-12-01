<?php
function elevado_a(&$numero, &$indice) {
    $resultado = $numero;
    for($x = $indice; $x > 1; $x--) {
        $resultado = $resultado * $numero;
    }
    $numero = $resultado;
    return $numero;
}

$numero = 2;
$indice = 6;

echo $numero . " elevado a " . $indice . " es igual a " . elevado_a($numero, $indice) . "<br/>";
echo $numero . " elevado a " . $indice . " es igual a " . elevado_a($numero, $indice) . "<br/>";