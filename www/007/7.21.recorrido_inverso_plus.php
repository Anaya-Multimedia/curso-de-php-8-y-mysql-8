<?php
$ciudades = array("Badajoz", "Mérida", "Cáceres", "Plasencia", "Trujillo");
$ciudades["España"] = "Madrid";
$ciudades["Portugal"] = "Lisboa";
$ciudades["Francia"] = "Paris";

function recorre($ciudades) {
    do {
        $ciudad_actual = current($ciudades);
        $indice = key($ciudades);
        echo "El valor es: $ciudad_actual con índice $indice<br/>";
    } while (next($ciudades));
}

//La siguiente función ya no es necesaria
function recorre_inverso($ciudades) {
    end($ciudades);
    do {
        $ciudad_actual = current($ciudades);
        $indice = key($ciudades);
        echo "El valor es: $ciudad_actual con índice $indice<br/>";
    } while (prev($ciudades));
}

recorre($ciudades);
echo "<hr/>";
recorre(array_reverse($ciudades));