<?php
$cadena1 = "Prueba";
$cadena2 = "Prueba";
if (strcmp($cadena1, $cadena2) == 0) {
    echo "Las dos cadenas son iguales";
} elseif (strcmp($cadena1, $cadena2) < 0) {
    echo "La cadena1 es menor que la cadena2";
} else {
    echo "La cadena1 es mayor que la cadena2";
}