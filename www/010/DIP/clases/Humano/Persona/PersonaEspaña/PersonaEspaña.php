<?php

namespace clases\Humano\Persona\PersonaEspaña;

use clases\Humano\Persona\Persona;

class PersonaEspaña extends Persona {

  protected $documentos = array();
    
  function setDocumento(Documento $documento) {
    array_push($this->documentos, $documento );
  }

  function getDocumentos() : array {
    return $this->documentos;
  }
    
  function getNombreCompleto() {
    return $this->apellido2 . " " . $this->apellido1 . ", " . $this->nombre;
  }   
}