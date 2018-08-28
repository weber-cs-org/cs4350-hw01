<?php

require_once(__DIR__."/../src/02-Vehicle.php");
require_once(__DIR__."/../src/02-Bicycle.php");
require_once(__DIR__."/../src/02-Motorcycle.php");
require_once(__DIR__."/../src/02-Car.php");

class VehicleTest extends \PHPUnit\Framework\TestCase {
        public function testBicycle00() {
                // arrange
                $harness = new Bicycle();
                $expected = 2;
                // act
                $actual = $harness->Wheels();
                // assert
                $this->assertEquals($expected, $actual);
        }

        public function testBicycle01() {
                // arrange
                $harness = new Bicycle();
                $expected = false;
                // act
                $actual = $harness->Motorized();
                // assert
                $this->assertEquals($expected, $actual);
        }

        public function testBicycle02() {
                // arrange
                $harness = new Bicycle();
                $expected = 1;
                // act
                $actual = $harness->Seats();
                // assert
                $this->assertEquals($expected, $actual);
        }

        public function testMotorcycle00() {
                // arrange
                $harness = new Motorcycle();
                // act & assert
                $this->assertEquals(800, $harness->CC());
                $this->assertEquals(true, $harness->Motorized());
                $this->assertEquals(2, $harness->Seats());
        }

        public function testCar00() {
                // arrange
                $harness = new Car();
                // act & assert
                $this->assertEquals(6, $harness->Cylinders());
                $this->assertEquals(true, $harness->Motorized());
                $this->assertEquals(5, $harness->Seats());
                $this->assertEquals(4, $harness->Wheels());
        }
}
