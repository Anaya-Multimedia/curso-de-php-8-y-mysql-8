<?php
$patron = "/[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,6}/";
$texto_con_correos = "Este es un texto que contiene varios correos: LUIS.CABEZAS@gmail.com paco@hotmail.com pedro.casas@silice.si";

preg_match_all($patron,$texto_con_correos, $correos);

echo "<pre>";
var_dump($correos);
echo "</pre>";