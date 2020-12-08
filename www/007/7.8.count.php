<?php
$colores = array("fuertes"  => array("rojo" => "FF0000", 
                                    "verde" => "00FF00", 
                                    "azul" => "0000FF"),
                "suaves"    => array("rosa" => "FE9ABC", 
                                    "amarillo" => "FDF189", 
                                    "malva" => "9A2F68"));
echo "Elementos en la dimensión 1: " .count($colores) . "<br/>";
echo "Elementos en la dimensión 2: " .count($colores["fuertes"]) . "<br/>";