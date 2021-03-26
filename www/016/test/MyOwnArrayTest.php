<?php
namespace Test;
use PHPUnit\Framework\TestCase;
use Application\MyOwnArray;

class MyOwnArrayTest extends TestCase {

  private $myOwnArray;

  protected function setUp(): void{
    $this->myOwnArray = new MyOwnArray();
  }

  public function testNewArrayIsEmpty(){
    $this->assertEquals(0, sizeof($this->myOwnArray->getMyArray()));
  }

  public function testArrayContainsAnElement(){
    $this->myOwnArray->addElementToMyArray("elemento");
    $this->assertEquals(1, sizeof($this->myOwnArray->getMyArray()));
  }

  // public function testArrayContainsTwoElements(){
  //   $myOwnArray->addElementToMyArray("elemento");
  //   $this->assertEquals(2, sizeof($myOwnArray->getMyArray()));
  // }

  protected function tearDown(): void{
    unset($this->myOwnArray);
  }

}