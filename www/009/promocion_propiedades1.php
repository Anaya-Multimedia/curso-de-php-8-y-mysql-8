<?php
class Usuario {
 
  public function __construct( private string $nombre, 
                               private string $apellido1, 
                               private string $apellido2, 
                               private string $correo ) {
  }
}

$usuario = new Usuario("Pako", "González", "Lozano", "pako@gmail.com");
$usuario = new Usuario(apellido1: "González", apellido2: "Lozano", nombre:"Pako", correo: "pako@gmail.com");

echo "<pre>";
var_dump($usuario);
echo "</pre>";