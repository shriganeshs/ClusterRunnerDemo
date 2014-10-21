<?php

$PROJECT_ROOT = dirname(dirname(__DIR__));
require_once("$PROJECT_ROOT/src/php/AwesomeCalculator.php");


/**
 * Class CalculatorSimpleTest
 *
 * This class contains several simple passing tests.
 */
class CalculatorSimpleTest extends PHPUnit_Framework_TestCase
{
    public function testSimpleAddition()
    {
        $actualResult = AwesomeCalculator::add(2, 5);
        $expectedResult = 7;

        $this->assertEquals($expectedResult, $actualResult);
    }

    public function testSimpleMultiplication()
    {
        $actualResult = AwesomeCalculator::multiply(2, 5);
        $expectedResult = 10;

        $this->assertEquals($expectedResult, $actualResult);
    }

    public function testSimpleSubtraction()
    {
        $actualResult = AwesomeCalculator::subtract(2, 5);
        $expectedResult = -3;

        $this->assertEquals($expectedResult, $actualResult);
    }

    public function testSimpleDivision()
    {
        $actualResult = AwesomeCalculator::divide(2, 5);
        $expectedResult = 0.4;
        $tolerance = 1e-9;

        $this->assertLessThan($expectedResult + $tolerance, $actualResult);
        $this->assertGreaterThan($expectedResult - $tolerance, $actualResult);
    }
}
