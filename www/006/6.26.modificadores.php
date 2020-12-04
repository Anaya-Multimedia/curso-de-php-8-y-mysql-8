<?php
$correo = "LUIS.CABEZAS@gmail.com";
if (preg_match("/^[a-z|\.]+@[a-z|\.]+\.(org|com|es)$/i",$correo)) {
    echo "El correo $correo es correcto";
} else {
    echo "El correo $correo no cumple el patrón";
}