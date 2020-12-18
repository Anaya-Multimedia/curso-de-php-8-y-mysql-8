<?php
$variable = "hola";
$$variable = "mundo";
// Las dos líneas siguientes producen la misma salida
echo "$variable ${$variable} <br/>";
echo "$variable $hola";
