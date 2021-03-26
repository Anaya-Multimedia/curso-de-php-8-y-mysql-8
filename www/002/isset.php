<?php
$nombre = "Guillermo González";
if ( isset( $nombre ) ) {
  echo "¡El nombre existe! <br/>";
}
// Podemos comprobar qué pasa si liberamos la variable $nombre
unset( $nombre );
if ( isset( $nombre ) ) {
  echo "¡El nombre existe!";
} else {
  echo "¡El nombre ya no existe!";
}