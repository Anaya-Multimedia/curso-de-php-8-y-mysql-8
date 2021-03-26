<?php
$numero_anterior = 0;
$numero_posterior = 1;
$serie = 1;
$fin = 10000;
echo "Serie de Fibonacci: ";
do {
  echo $serie . ", ";
  $serie = $numero_anterior + $numero_posterior;
  $numero_anterior = $numero_posterior;
  $numero_posterior = $serie;
}
while ( $serie < $fin );