<?php
$numero_anterior = 1;
$numero_posterior = 0;
$serie = 0;
$fin = 10000;
echo "Serie de Fibonacci: ";
while ( $serie < $fin ) {
  echo $serie . ", ";
  $serie = $numero_anterior + $numero_posterior;
  $numero_anterior = $numero_posterior;
  $numero_posterior = $serie;
}