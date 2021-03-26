<?php
function sumaNumeros(int|float $sumando1, int|float $sumando2){
  return $sumando1 + $sumando2;
}
echo "La suma de los enteros 3 y 4 es igual a: " . sumaNumeros( 3, 4) . "<br/>";
echo "La suma de los enteros 3.5 y 4.6 es igual a: " . sumaNumeros( 3.5, 4.6) . "<br/>";