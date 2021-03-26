<?php
function saludo_mañana() {
    return "Buenos días";
}
function saludo_tarde() {
    return "Buenas tardes";
}
function saludo_noche() {
    return "Buenas noches";
}
$horario = "tarde";
$funcion_variable = "saludo_" . $horario;
echo $funcion_variable();