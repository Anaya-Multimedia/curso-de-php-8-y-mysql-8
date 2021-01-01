<?php

use clases\Humano\Persona\PersonaEspaña\PersonaEspaña;
use clases\Humano\Persona\PersonaEspaña\Dni;
use clases\Humano\Persona\PersonaEspaña\Pasaporte;
use clases\Humano\Persona\PersonaEspaña\LibroFamilia;

spl_autoload_register(function ($clase) {

    $directorio_clase = str_replace('\\', '/', $clase);
        if (file_exists($directorio_clase . '.php')) {
          require $directorio_clase . '.php';
        }
    });

define('NOMBRE_PERSONA', 'Luis Alberto');
define('PRIMER_APELLIDO_PERSONA', 'Pérez');
define('SEGUNDO_APELLIDO_PERSONA', 'Gutiérrez');

define('NUMERO_DNI', '08868143X');
define('NUMERO_PASAPORTE', '08868143X-PA');
define('NUMERO_LIBRO_FAMILIA', '08868143X-LF');

$persona = new PersonaEspaña(nombre: NOMBRE_PERSONA, apellido1: PRIMER_APELLIDO_PERSONA, apellido2: SEGUNDO_APELLIDO_PERSONA);
$dni_persona = new Dni(NUMERO_DNI);
$pasaporte_persona = new Pasaporte(NUMERO_PASAPORTE);
$libroFamilia_persona = new LibroFamilia(NUMERO_LIBRO_FAMILIA);

$persona->setDocumento($dni_persona);
$persona->setDocumento($pasaporte_persona);
$persona->setDocumento($libroFamilia_persona);

echo $persona->getNombreCompleto();
echo "<br/>";
echo "<pre>";
var_dump($persona->getDocumentos());
echo "</pre>";

foreach($persona->getDocumentos() as $documento) {
  echo $documento->getNombreDocumento() . "<br/>";
}