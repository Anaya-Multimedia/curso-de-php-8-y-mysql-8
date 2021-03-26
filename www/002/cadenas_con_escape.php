<?php
//Secuencias de escape
$cadena1 = 'Aquí se pueden añadir comillas "dobles"';
$cadena2 = "Aquí se pueden añadir comillas 'simples'";
$cadena3 = "Esta cadena da errores por las comillas "dobles"";
$cadena4 = "Esta cadena no da errores por las comillas \"dobles\"";
echo $cadena1;
echo $cadena2;
echo $cadena3;
echo $cadena4;