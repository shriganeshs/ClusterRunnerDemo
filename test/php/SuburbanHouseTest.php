<?php

$PROJECT_ROOT = dirname(dirname(__DIR__));
require_once("$PROJECT_ROOT/src/php/SuburbanHouse.php");


/**
 * Class SuburbanHouseTest
 *
 * This class contains several simple passing tests.
 */
class SuburbanHouseTest extends PHPUnit_Framework_TestCase
{
    public function testDefaultsAreSetCorrectly() {
        $house = new SuburbanHouse();

        $expectedNumBedrooms = 2;
        $expectedHasFinishedBasement = false;
        $this->assertEquals($expectedNumBedrooms, $house->numBedrooms());
        $this->assertEquals($expectedHasFinishedBasement, $house->hasFinishedBasement());
    }

    public function testPropertiesAreSetCorrectly() {
        $expectedNumBedrooms = 3;
        $expectedHasFinishedBasement = true;
        $house = new SuburbanHouse($expectedNumBedrooms, $expectedHasFinishedBasement);

        $this->assertEquals($expectedNumBedrooms, $house->numBedrooms());
        $this->assertEquals($expectedHasFinishedBasement, $house->hasFinishedBasement());
    }

    public function testNumBathrooms() {
        $numBedrooms = 3;
        $house = new SuburbanHouse($numBedrooms);

        $expectedNumBathrooms = 3.5;
        $this->assertEquals($expectedNumBathrooms, $house->numBathrooms());
    }

    public function testSquareFootageWithoutFinishedBasement() {
        $numBedrooms = 3;
        $hasFinishedBasement = false;
        $house = new SuburbanHouse($numBedrooms, $hasFinishedBasement);

        $expectedSquareFootage = 1750;
        $this->assertEquals($expectedSquareFootage, $house->squareFootage());
    }

    public function testSquareFootageWithFinishedBasement() {
        $numBedrooms = 3;
        $hasFinishedBasement = true;
        $house = new SuburbanHouse($numBedrooms, $hasFinishedBasement);

        $expectedSquareFootage = 2750;
        $this->assertEquals($expectedSquareFootage, $house->squareFootage());
    }
}
