<?php
function concatena(...$palabras){
  $resultado = "";
  foreach($palabras as $palabra){
    $resultado .= $palabra." ";
  }
  return $resultado;
}
echo concatena( "Curso","de","PHP 8","y","MySQL 8")."<br/>";
echo concatena( "Anaya","Multimedia");