<?php
$cadena = "Esta cadena tiene muchas letras";
print "La palabra 'cadena' está contenida: " . (str_contains($cadena, 'cadena') ? 'verdadero' : 'falso') . "<br/>";
print "La palabra 'PHP' está contenida: " . (str_contains($cadena, 'PHP') ? 'verdadero' : 'falso');