<?php
function concatena($titulo,...$palabras){
  $resultado = $titulo."\n"; // \n para salto de línea
  foreach($palabras as $palabra){
    $resultado .= $palabra." ";
  }
  return $resultado;
}
echo concatena( "Título: ","Curso","de","PHP 8","y","MySQL 8");
echo concatena( "Editorial","Anaya","Multimedia");