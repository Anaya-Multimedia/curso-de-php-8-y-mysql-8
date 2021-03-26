<?php
$colores = array("rojo", "amarillo", "verde", "azul", "rosa");
echo "El número de colores es: " .count($colores) . "<br/>";
unset($colores[2]);
echo "El número de colores es: " .count($colores) . "<br/>";