<?php
$numero_canicas = 2;
switch ($numero_canicas) {
  case 1:
    echo "Tengo una canica...";
    break;
  case 2:
    echo "Tengo 2 ";
  case 3:
    echo "o más canicas...";
    break;
  case 4:
    echo "Tengo muchísimas canicas...";
    break;
  case 100:
    echo "Tengo más de 100 canicas...";
  default:
    echo "¡Genial!";
}