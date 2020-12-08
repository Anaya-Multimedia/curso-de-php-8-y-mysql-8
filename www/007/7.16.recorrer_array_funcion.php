<?php
$ciudades = array("Badajoz", "Mérida", "Cáceres", "Plasencia", "Trujillo");
$ciudades["España"] = "Madrid";
$ciudades["Portugal"] = "Lisboa";
$ciudades["Francia"] = "Paris";

function recorre($ciudades) {
    do {
        $ciudad_actual = current($ciudades);
        echo "El valor es: $ciudad_actual <br/>";
    } while (next($ciudades));
}

recorre($ciudades);
echo "<hr/>";
recorre($ciudades);