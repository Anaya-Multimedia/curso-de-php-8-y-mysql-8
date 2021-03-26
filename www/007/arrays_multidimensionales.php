<?php
$colores = array("fuertes", "suaves");
$colores["fuertes"] = array("rojo" => "FF0000", "verde" => "00FF00", "azul" => "0000FF");
$colores["suaves"] = array("rosa" => "FE9ABC", "amarillo" => "FDF189", "malva" => "9A2F68");
echo "El rojo es: " . $colores["fuertes"]["rojo"];
echo "<pre>";
var_dump($colores);
echo "</pre>";