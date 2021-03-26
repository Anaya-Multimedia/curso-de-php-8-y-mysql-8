<?php
$salto_de_linea = "\n";
$cadena = "   cadena con    varios    espacios en       blanco     ";
echo $salto_de_linea . $cadena . " tamaño " . strlen($cadena) . "<br/>";
echo $salto_de_linea . ltrim($cadena) . " tamaño " . strlen(ltrim($cadena)) . "<br/>";
echo $salto_de_linea . chop($cadena) . " tamaño " . strlen(chop($cadena)) . "<br/>";
echo $salto_de_linea . trim($cadena) . " tamaño " . strlen(trim($cadena)) . "<br/>";