<?php

namespace clases\Humano\Persona\PersonaEspaña;


class Pasaporte implements Documento {

  public function __construct(private string $id) {
    
  }

  public function getId() {
    return $this->id;
  }

  public function getNombreDocumento():string {
    return "Pasaporte";
  }
}