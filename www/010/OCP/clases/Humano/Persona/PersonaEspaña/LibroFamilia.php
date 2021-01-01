<?php

namespace clases\Humano\Persona\PersonaEspaña;


class LibroFamilia {

  public function __construct(private string $id) {
    
  }

  public function getId() {
    return $this->id;
  }

  public function getNombreDocumento() {
    return "Libro de Familia";
  }
}