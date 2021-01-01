<?php
abstract class Humano {
  private $nombre;
  private $apellido1;
  private $apellido2;
  public function setNombre(string $nombre) {
    $this->nombre = $nombre;
  }
  public function getNombre() {
    return $this->nombre;
  }
 public function setApellidos(string $apellido1, string $apellido2) {
    $this->apellido1 = $apellido1;
    $this->apellido2 = $apellido2;
  }
  protected function getApellido1() {
    return $this->apellido1;
  }
  protected function getApellido2() {
    return $this->apellido2;
  }
  public function getApellidos() {
    return $this->getApellido1() . " " . $this->getApellido2();
}
  abstract public function getNombreCompleto();
}