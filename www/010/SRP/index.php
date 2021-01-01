<?php

use clases\Humano\Persona\PersonaEspaña\PersonaEspaña;
use clases\Humano\Persona\PersonaEspaña\Dni;

spl_autoload_register(function ($clase) {

    $directorio_clase = str_replace('\\', '/', $clase);
        if (file_exists($directorio_clase . '.php')) {
          require $directorio_clase . '.php';
        }
    });

$persona = new PersonaEspaña(nombre: "Alberto", apellido1: "Pérez", apellido2: "Gutiérrez");
$dni = "08868143X";
$persona->setDni($dni);

echo $persona->getNombreCompleto();
echo "<br/>";
echo $persona->getDni();