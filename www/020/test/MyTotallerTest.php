<?php
namespace Test;
use PHPUnit\Framework\TestCase;
use Application\MyTotaller;

final class MyTotallerTest extends TestCase {
  private $calculator;
  private $totaller;

  protected function setUp(): void{
    $this->calculator = $this->createMock(\Application\MyCalculator::class);
    $this->totaller   = new MyTotaller();
    $this->totaller->setCalculator($this->calculator);
  }

  public function testCalculateTotal() {
    $this->calculator
      ->expects($this->exactly(3))
      ->method('add')
      ->withConsecutive([0,1], [1,2], [3,3])
      ->willReturnOnConsecutiveCalls(1,3,6);

    $this->totaller->addOperand(1);
    $this->totaller->addOperand(2);
    $this->totaller->addOperand(3);
    $this->assertEquals(6, $this->totaller->calculateTotal());
  }
}