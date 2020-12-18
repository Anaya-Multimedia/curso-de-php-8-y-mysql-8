<?php
function adios(?string $nombre = null) {
  if (is_null($nombre)) {
    echo "¡Adiós!";
  } else {
    echo "¡Adiós $nombre!";
  }
}
adios(); // correcto
adios(null); // correcto
adios(‘Jose’); // correcto