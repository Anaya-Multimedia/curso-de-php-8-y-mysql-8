<?php

namespace clases\Humano\Persona\PersonaUSA;

use clases\Humano\Persona\Persona;

class PersonaUSA extends Persona {
    protected $id;
    
   function setId(string $id) {
      $this->id = $id;
    }
    
    function getId() {
      return $this->id;
    }
    
    function getApellidos() {
      return $this->apellido2 . " " . $this->apellido1;
    }
}

function cambiaNombre(Persona $persona, string $nombre) {
  $persona->setNombre($nombre);
}