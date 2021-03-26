<?php
namespace Application;
use Application\MyCalculator;

class MyTotaller {
  private MyCalculator $calculator;
  private $operands = [];

  public function getCalculator(): MyCalculator{
    if (empty($this->calculator)) {
      $this->calculator = new MyCalculator();
    }
    return $this->calculator;
  }

  public function setCalculator(MyCalculator $calculator) {
    $this->calculator = $calculator;
  }

  public function addOperand(int $operand) {
    $this->operands[] = $operand;
  }

  public function calculateTotal(): int {
    $calculator = $this->getCalculator();
    $total = 0;
    foreach ($this->operands as $operand) {
        $total = $calculator->add($total, $operand);
    }
    return $total;
  }
}