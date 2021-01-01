<?php

namespace clases\Humano\Persona;

use clases\Humano\Humano;

class Persona implements Humano{
  protected string $nombre;
  protected string $apellido1;
  protected string $apellido2;
  
  function setNombre(string $nombre) {
    $this->nombre = $nombre;
  }
  
  function getNombre() {
    return $this->nombre;
  }
  
  function setApellidos(string $apellido1, string $apellido2) {
    $this->apellido1 = $apellido1;
    $this->apellido2 = $apellido2;
  }
  
  function getApellidos() {
    return $this->apellido1 . " " . $this->apellido2;
  }
}