<?php
$nombre = "Luis Miguel";
$apellidos = "Cabezas Granado";
$nombre_auxiliar = $nombre;
$nombre_referencia = &$nombre;
echo $nombre . " " . $apellidos . "<br/>";
$nombre_auxiliar = "Pako";
echo $nombre . " " . $apellidos . "<br/>";
$nombre_referencia = "Felipe";
echo $nombre . " " . $apellidos . "<br/>";