<?php
function hola(?string $nombre) {
      echo "Hola $nombre";
}
hola(); // incorrecto
hola(null); // correcto