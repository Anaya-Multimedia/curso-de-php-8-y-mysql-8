<?php
class Pedido {
  private $lineas;

  public function añadirLineaDetalle(LineaDetalle $linea) {
    $this->lineas[] = $linea;
  }

  public function getLineasDetalle() {
    return $this->lineas;
  }
}

class LineaDetalle {
  private $cantidad;
  private $denominacion;
  private $liquido = false;
  
  public function __construct(int $cantidad, string $denominacion) {
    $this->cantidad = $cantidad;
    $this->denominacion = $denominacion;
  }
  
  public function setEnLitros() {
    $this->liquido = true;
  } 
}

$pedido = new Pedido();
$linea1 = new LineaDetalle(2,"Patatas");
$pedido->añadirLineaDetalle($linea1);
$linea2 = new LineaDetalle(5,"Tomates");
$pedido->añadirLineaDetalle($linea2);
$linea3 = new LineaDetalle(1,"Leche");
$linea3->setEnLitros();
$pedido->añadirLineaDetalle($linea3);

print("<pre>");
print_r($pedido->getLineasDetalle());
print("</pre>");