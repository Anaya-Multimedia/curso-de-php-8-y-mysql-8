<?php
$cadena = $cadena = "Esta cadena tiene muchas letras";
print "La cadena empieza por 'Esta' : " . (str_starts_with($cadena, 'Esta') ? 'verdadero' : 'falso') . "<br/>";
print "La cadena no empieza por 'Aquella' : " . (str_starts_with($cadena, 'Aquella') ? 'verdadero' : 'falso') . "<br/>";

print "La cadena termina en 'letras' : " . (str_ends_with($cadena, 'letras') ? 'verdadero' : 'falso') . "<br/>";
print "La cadena no termina en 'vocales' : " . (str_ends_with($cadena, 'vocales') ? 'verdadero' : 'falso') . "<br/>";
