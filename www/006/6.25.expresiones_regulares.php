<?php
$correos = ["luismiguel.cabezas@juntaex.es", "franscisco.gonzalez@gmail", "antonio@guzman.com", "LUIS@gmail.com"];
$patron = "/[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,6}/";

foreach ($correos as $correo) {
    if (preg_match($patron, $correo)) {
        echo "¡$correo => es CORRECTO! <br/>";
    } else {
        echo "¡$correo => es INCORRECTO! <br/>";
    }
}