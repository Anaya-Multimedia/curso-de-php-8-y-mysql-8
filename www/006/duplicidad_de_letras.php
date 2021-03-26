<?php
function duplicar_caracteres($cadena) {
    $tamaño = strlen($cadena);
    $cadena_auxiliar = "";
    for( $x = 0; $x < $tamaño; $x++ ) {
        $cadena_auxiliar = $cadena_auxiliar . $cadena[$x] .$cadena[$x];
    }
    return $cadena_auxiliar;
}

$cadena = "Duplicar letras";
echo duplicar_caracteres($cadena);