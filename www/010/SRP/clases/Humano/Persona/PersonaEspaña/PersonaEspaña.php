<?php

namespace clases\Humano\Persona\PersonaEspaña;

use clases\Humano\Persona\Persona;

class PersonaEspaña extends Persona {
  
  protected Dni $dni;
    
  function setDni(string $dni) {
    $this->dni = new Dni($dni);
  }
    
  function getDni() {
    return $this->dni->getNumeroDni();
  }
    
  function getNombreCompleto() {
    return $this->apellido2 . " " . $this->apellido1 . ", " . $this->nombre;
  }
       
}