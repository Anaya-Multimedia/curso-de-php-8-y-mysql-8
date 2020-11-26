<?php
function factorial($numero) {
  $resultado = 1;
  for ($x = $numero; $x > 0; $x--) {
    $resultado = $resultado * $x;
  }
  return $resultado;
}
echo "El factorial de 3 es " . factorial(3) . "<br/>";
echo "El factorial de 4 es " . factorial(4) . "<br/>";
echo "El factorial de 5 es " . factorial(5) . "<br/>";