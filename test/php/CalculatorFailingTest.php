<?php

$PROJECT_ROOT = dirname(dirname(__DIR__));
require_once("$PROJECT_ROOT/src/php/AwesomeCalculator.php");


/**
 * Class CalculatorFailingTest
 *
 * This class contains a test which fails. This exists just to demonstrate the behavior of ClusterRunner with
 * failing tests. Note: we do not condone the presence of permanently failing tests in your project. :)
 */
class CalculatorFailingTest extends PHPUnit_Framework_TestCase
{
    public function testICantAddRealGood()
    {
        $actualResult = AwesomeCalculator::add(2, 2);
        $expectedResult = 5;

        $this->assertEquals($expectedResult, $actualResult, 'This test fails because I am bad at math.');
    }
}
