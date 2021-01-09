<?php
class Singleton {
  private static $instancia;
  private $contador;

  private function __construct() {
    echo "Se ha creado un " . __CLASS__ . "\n";
    $this->contador =0;
  }

  public static function getInstancia() {
    if (  !self::$instancia instanceof self) {
      self::$instancia = new self;
    }
    return self::$instancia;
  }
 
  public function getContador() {
    return $this->contador;
  }
 
  public function incrementar() {
    $this->contador++;
  }

  public function disminuir() {
    $this->contador--;
  }
}