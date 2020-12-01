<?php
function factorial($numero) {
  if ($numero == 1) {
      return $numero;
  } else {
      return $numero * factorial($numero - 1);
  }
}
echo "El factorial de 3 es " . factorial(3) . "<br/>";
echo "El factorial de 4 es " . factorial(4) . "<br/>";
echo "El factorial de 5 es " . factorial(5) . "<br/>";