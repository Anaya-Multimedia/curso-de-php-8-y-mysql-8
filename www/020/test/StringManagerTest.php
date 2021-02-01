<?php
namespace Test;
use PHPUnit\Framework\TestCase;
use Application\StringManager;

class StringManagerTest extends TestCase {
    private $stringManager;

    protected function setUp(): void {
        $this->stringManager = new StringManager();
    }

    function testGetMaxLengthForEmptyParameters() {
        $result = $this->stringManager->getMaxLength();
        $this->assertFalse($result);
    }

    function testGetMaxLengthForOneParameterNotString() {
        $notStringParameter = 1;
        $result = $this->stringManager->getMaxLength($notStringParameter);
        $this->assertFalse($result);
    }

    function testGetMaxLengthForOneParameterString() {
        $stringParameter = "Test";
        $result = $this->stringManager->getMaxLength($stringParameter);
        $this->assertEquals($result,4);
    }

    function testGetMaxLengthForTwoParametersNotString() {
        $notStringParameter1 = 1;
        $notStringParameter2 = 2;
        $result = $this->stringManager->getMaxLength(
        $notStringParameter1,
        $notStringParameter2
        );
        $this->assertFalse($result);
    }

    public function testGetMaxLengthForTwoParametersStringAndNotString() {
        $stringParameter = "Test";
        $notStringParameter = 1;
        $result = $this->stringManager->getMaxLength(
            $stringParameter,
            $notStringParameter
        );
        $this->assertEquals($result, 4);
    }

    public function testGetMaxLengthForTwoParametersNotStringAndString() {
        $notStringParameter = 1;
        $stringParameter = "Test";
        $result = $this->stringManager->getMaxLength(
            $notStringParameter,
            $stringParameter
        );
        $this->assertEquals($result, 4);
    }

    public function testGetMaxLengthForTwoStringParametersEqualLength() {
        $stringParameter1 = "1234";
        $stringParameter2 = "Test";
        $result = $this->stringManager->getMaxLength(
        $stringParameter1,
        $stringParameter2
        );
        $this->assertEquals($result, 4);
    }

    public function testGetMaxLengthForTwoStringParameters() {
        $stringParameter1 = "Test";
        $stringParameter2 = "Otro test";
        $result = $this->stringManager->getMaxLength(
            $stringParameter1,
            $stringParameter2
        );
        $this->assertEquals($result, 9);
    }


}