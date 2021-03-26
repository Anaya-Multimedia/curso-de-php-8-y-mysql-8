<?php
namespace Application;

class MyOwnArray {
  private $myArray;

  function __construct() {
    $this->myArray = [];
  }

  public function addElementToMyArray($element) {
    $this->myArray[] = $element;
  }

  public function getMyArray() {
    return $this->myArray;
  }
}