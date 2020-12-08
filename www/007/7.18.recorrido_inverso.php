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

function recorre_inverso($ciudades) {
    end($ciudades);
    do {
        $ciudad_actual = current($ciudades);
        echo "El valor es: $ciudad_actual <br/>";
    } while (prev($ciudades));
}

recorre($ciudades);
echo "<hr/>";
recorre_inverso($ciudades);