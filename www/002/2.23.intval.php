<?php
// Conversión de un tipo string a un integer
$cadena = "232";
echo "El tipo de la variable cadena es " . gettype( $cadena );
$numero = intval( $cadena );
echo "el numero es $numero";
