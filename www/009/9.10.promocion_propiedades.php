<?php
class Usuario {
  private string $nombre;
  private string $apellido1;
  private string $apellido2;
  private string $correo;  
  public function __construct(string $nombre, string $apellido1, string $apellido2, string $correo ) {
    $this->nombre = $nombre;
    $this->apellido1 = $apellido1;
    $this->apellido2 = $apellido2;
    $this->correo = $correo;
  }
}

$usuario = new Usuario("Pako", "González", "Lozano", "pako@gmail.com");