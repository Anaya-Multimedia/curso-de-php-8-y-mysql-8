<?php
$ciudades = array("Badajoz", "Mérida", "Cáceres", "Plasencia", "Trujillo");
$ciudades["España"] = "Madrid";
$ciudades["Portugal"] = "Lisboa";
$ciudades["Francia"] = "Paris";
foreach($ciudades as $indice => $ciudad) {
    echo "Imprimiendo en pantalla la ciudad: $ciudad con el índice: $indice <br/>";
}