<?php
namespace clases\Humano;

interface Humano {
  public function setNombre(string $nombre);
  public function getNombre();
  public function setApellidos(string $apellido1, string $apellido2);
  public function getApellidos();
}