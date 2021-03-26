<?php
echo "Fecha en idioma nativo: " . strftime('%A, %d de %B de %Y') . "<br/>"; 
setlocale(LC_TIME, 'es_ES.UTF-8');
echo "Fecha en idioma español de España: " . strftime('%A, %d de %B de %Y'); 