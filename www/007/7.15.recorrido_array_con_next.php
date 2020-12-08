<?php
$ciudades = array("Badajoz", "Mérida", "Cáceres", "Plasencia", "Trujillo");
$ciudades["España"] = "Madrid";
$ciudades["Portugal"] = "Lisboa";
$ciudades["Francia"] = "Paris";
do {
    $ciudad_actual = current($ciudades);
    echo "El valor es: $ciudad_actual <br/>";
} while (next($ciudades));