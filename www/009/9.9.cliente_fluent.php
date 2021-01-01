<?php
class Cliente {
  private $pedido;

  public function nuevoPedido() {
    $this->pedido = new Pedido;
    return $this->pedido;
}

  public function getPedido() {
    return $this->pedido;
  }
}

class Pedido {
  private $lineas;
  public function

  __construct(){
    return $this;
  }
  
  public function con(int $cantidad, string $denominacion) {
    $linea = new LineaDetalle($cantidad,$denominacion);
    $this->añadirLineaDetalle($linea);
    return $this;
  }
  
  public function liquido() {
    $this->lineas[sizeof($this->lineas) - 1]->setEnLitros();
    return $this;
  }
  
  public function añadirLineaDetalle(LineaDetalle $linea) {
    $this->lineas[] = $linea;
  }
  
  public function getLineasDetalle() {
    return $this->lineas;
  }
}