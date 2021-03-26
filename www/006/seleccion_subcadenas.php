<?php
$cadena = $cadena = "Esta cadena tiene muchas letras";
//Devuelve la cadena completa
echo substr($cadena, 0) . "<br/>";
//Desde el carácter 12 hasta el final
echo substr($cadena, 12) . "<br/>";
//Devuelve 6 caracteres desde el carácter 18
echo substr($cadena, 18, 6) . "<br/>";
//Devuelve los 6 últimos caracteres
echo substr($cadena, -6) . "<br/>";
//Desde la posición 26, contando desde atrás, 6 caracteres
echo substr($cadena, -26, 6) . "<br/>";
//Empezando en el carácter 4 y terminando en el 7 desde atrás
echo substr($cadena, 4, -7) . "<br/>";
