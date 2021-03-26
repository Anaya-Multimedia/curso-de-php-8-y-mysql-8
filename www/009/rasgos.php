<?php
trait UtilFecha {
    private $fecha;
    public function setFecha() {
        $this->fecha = new DateTime();
    }

    public function getFecha() {
        return $this->fecha->format("d/m/Y");
    }
}

trait UtilImpuesto {
  private $iva;  
  public function getIva() {
        return 0.21;
  }
}

class Factura{
  use UtilFecha, UtilImpuesto;
  function __construct(){
    $this->setFecha();
  } 
}

$factura = new Factura();
echo $factura->getFecha()."<br/>";
echo $factura->getIva();