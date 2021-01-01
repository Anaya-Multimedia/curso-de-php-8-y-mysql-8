<?php

namespace clases\Humano\Persona;

use clases\Humano\Humano;

class Persona implements Humano{

  function __construct(protected string $nombre, protected string $apellido1, protected string $apellido2) {

  }

}