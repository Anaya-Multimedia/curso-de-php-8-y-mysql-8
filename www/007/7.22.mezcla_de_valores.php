<?php
$frases_celebres = array("No temo a los ordenadores; lo que temo es quedarme sin ellos, Isaac Asimov",
                         "El ordenador nació para resolver problemas que antes no existían, Bill Gates",
                         "Antes de que un software sea reutilizable debería ser utilizable, Ralph Johnson",
                         "El optimismo es un riesgo laboral de la programación; el feedback es el tratamiento, Kent Beck",
                         "Una vez un ordenador me venció jugando al ajedrez, pero no me opuso resistencia cuando pasamos al kick boxing, Emo Philips");

echo "La frase del día:<br/>";
echo "<hr/>";
if (shuffle($frases_celebres)) {
    echo current($frases_celebres);
} else {
    echo "Ocurrió un error al mezclar las frases";
}