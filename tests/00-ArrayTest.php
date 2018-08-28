<?php

require_once(__DIR__."/../src/00-Arrays.php");

class ArraysTest extends \PHPUnit\Framework\TestCase {
    public function testSubstitution00() {
        // arrange
        $expected = "The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"."\n";
        $arr = ['black', 'red', 'blue', 'green', 'white', 'purple'];
        // act
        $actual = Substitution($arr);
        // assert
        $this->assertEquals($expected, $actual);
    }

    public function testSubstitution01() {
        // arrange
        $expected = "The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"."\n";
        $arr = ['red', 'black', 'green', 'blue', 'white', 'purple', 'indigo'];
        // act
        $actual = Substitution($arr);
        // assert
        $this->assertEquals($expected, $actual);
    }

    public function testInit00() {
        // arrange
        $expected = [
            20=>2,
            21=>3,
            22=>4,
            23=>5,
            24=>6,
            25=>7
        ];
        // act
        $actual = Init();
        // assert
        $this->assertEquals($expected, $actual);
    }

    public function testSorting00() {
        // arrange
        $expected = [
            "Netherlands"=>"Amsterdam",
            "Greece" => "Athens",
            "Germany" => "Berlin",
            "Slovakia"=>"Bratislava",
            "Belgium"=> "Brussels",
            "Hungary"=>"Budapest",
            "Denmark"=>"Copenhagen",
            "Ireland"=>"Dublin",
            "Finland"=>"Helsinki",
            "Portugal"=>"Lisbon",
            "Slovenia"=>"Ljubljana",
            "United Kingdom"=>"London",
            "Luxembourg"=>"Luxembourg",
            "Spain"=>"Madrid",
            "Cyprus"=>"Nicosia",
            "France" => "Paris",
            "Czech Republic"=>"Prague",
            "Latvia"=>"Riga",
            "Italy"=>"Rome",
            "Sweden"=>"Stockholm",
            "Estonia"=>"Tallin",
            "Malta"=>"Valetta",
            "Lithuania"=>"Vilnius",
            "Austria" => "Vienna",
            "Poland"=>"Warsaw"
        ];
        // act
        $actual = SortArray();
        // assert
        $this->assertEquals($expected, $actual);
    }

    public function testDeleteItem00() {
        // arrange
        $expected = [1,2,4,5];
        // act
        $actual = DeleteItem([1,2,3,4,5], 2);
        // assert
        $this->assertEquals($expected, $actual);
    }

    public function testDeleteItem01() {
        // arrange
        $expected = [1,2,3,4,5,6,8,9,10];
        // act
        $actual = DeleteItem([1,2,3,4,5,6,7,8,9,10], 6);
        // assert
        $this->assertEquals($expected, $actual);
    }

    public function testMergeArrays00() {
        // arrange
        $arr1 = [[77, 87], [23, 45]];
        $arr2 = ["weber", "edu"];
        $expected = [
            ['weber', 77, 87],
            ['edu', 23, 45]
        ];
        // act
        $actual = MergeArrays($arr1, $arr2);
        // assert
        $this->assertEquals($expected, $actual);
    }
/*
    public function testMergeArrays01()
    {
        // arrange
        $arr1 = [[77, 87], [23, 45]];
        $arr2 = ["weber", "edu", "university"];
        $expected = [
            ['weber', 77, 87],
            ['edu', 23, 45],
            ['university']
        ];
        // act
        $actual = MergeArrays($arr1, $arr2);
        // assert
        $this->assertEquals($expected, $actual);
    }

    public function testMergeArrays02()
    {
        // arrange
        $arr1 = [[77, 87], [23, 45], [1, 2, 3]];
        $arr2 = ["weber", "edu"];
        $expected = [
            ['weber', 77, 87],
            ['edu', 23, 45],
            [1, 2, 3]
        ];
        // act
        $actual = MergeArrays($arr1, $arr2);
        // assert
        $this->assertEquals($expected, $actual);
    }
*/
}

