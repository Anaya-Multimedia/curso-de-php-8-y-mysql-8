<?php
$listado_archvos = `ls -al`; //Listado de todos los archivos del directorio actual

echo "<pre>$listado_archvos</pre>"; //Se imprime en pantalla