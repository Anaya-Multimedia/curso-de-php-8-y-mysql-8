<?php
$a = 23;
$b = $a++; // $b es igual a 23, porque $a se incremeta después de la asignación

$a = 23;
$c = ++$a; // $c es igual a 24, porque $a se incrementa antes de la asignación
echo "La variable b es: $b, y la c es $c";