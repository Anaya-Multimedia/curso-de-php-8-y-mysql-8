<?php
class Persona {
  public string $nombre;
  public string $apellido1;
  public string $apellido2;
  
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

class PersonaUSA extends Persona {
    public $id;
    
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