# Homework 01 - Points **145**

## Replace with your name *First* *Last*

## Instructions

### 00 - Arrays

#### Substituting an `array` in a `string`

Write a function named `Substitution($colors)` which takes an array of colors and returns the following string
```
"The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
```
and the words 'red', 'green' and 'white' will come from the `$colors` array.

#### Initializing an `array`

Write a function named `Init()` to create a range and returns an array like the following.
```php
Array (
    [20] => 2
    [21] => 3
    [22] => 4
    [23] => 5
    [24] => 6
    [25] => 7
)
```

#### Sorting `arrays`

Create a function named `SortArray()` which returns the capital and country name from the below array $ceu. Sort the array by the capital of the country.

```php
$ceu = [
    "Italy"=>"Rome",
    "Luxembourg"=>"Luxembourg",
    "Belgium"=>"Brussels",
    "Denmark"=>"Copenhagen",
    "Finland"=>"Helsinki",
    "France"=>"Paris",
    "Slovakia"=>"Bratislava",
    "Slovenia"=>"Ljubljana",
    "Germany"=>"Berlin",
    "Greece"=>"Athens",
    "Ireland"=>"Dublin",
    "Netherlands"=>"Amsterdam",
    "Portugal"=>"Lisbon",
    "Spain"=>"Madrid",
    "Sweden"=>"Stockholm",
    "United Kingdom"=>"London",
    "Cyprus"=>"Nicosia",
    "Lithuania"=>"Vilnius",
    "Czech Republic"=>"Prague",
    "Estonia"=>"Tallin",
    "Hungary"=>"Budapest",
    "Latvia"=>"Riga",
    "Malta"=>"Valetta",
    "Austria"=>"Vienna",
    "Poland"=>"Warsaw"
];
```

#### Deleting an item from an `array`

Create a function named `DeleteItem($arr, $idx)` that takes an `array` and `index` to be deleted. After deleting the element at the index, integer keys **must be normalized**.

Example:
```php
$z = [1,2,3,4,5];

// after deleting element with index 2

// array_length(4) {[0]=>1, [1]=>2, [2]=>4, [3]=>5}
```

#### Merging `arrays`

Write a function named `MergeArrays($arr1, $arr2)` to merge (by index) any two arrays and return a new merged array.

Example:
```php
$arr1 = [[77, 87], [23, 45]];
$arr2 = ["weber", "edu"];
```
Expected Output:
```
Array(
    [0] => Array(
        [0] => weber
        [1] => 77
        [2] => 87
    )
    [1] => Array(
        [0] => edu
        [1] => 23
        [2] => 45
    )
)
```

### 01 - JSON

#### Decoding a valid JSON string

Write a function named `DecodeValidJson($jsonStr)` that will decode a valid JSON string and return an associative array.

#### Decoding either a valid or invalid JSON string

Write a function named `DecodeJson($jsonStr)` that will decode a valid JSON string and handle errors on an invalid JSON string and return an associative array.

### 02 - Object Oriented PHP

#### Polymorphism

Create three contrete classes that represent a *bicycle*, *motorcycle* and *car*.  Each class should use the `abstract class` properties and add some of their own such as manufacture and any additional information.

```php
abstract class Vehicle {
        protected $numOfWheels;
        protected $motorized;
        // Additional properties go here

        public function __construct($wheels, $hasMotor) {
                $this->numOfWheels = $wheels;
                $this->motorized = $hasMotor;
        }

        public function NumOfWheels() {
                return $this->numOfWheels;
        }

        public function Motorized() {
                return $this->motorized;
        }

        // Additional methods go here
}

```

#### Composition

Implement the code in the article **"Object Interaction in PHP: Introduction to Composition"**R

#### Interfaces

Create an `interface` named `Storage` with the needed method stubs.  Modify the below classes to `extend` the `Storage` interface and implement the concrete methods.

```php
class FileStorage {
    protected $filename;

    public function __construct() {
        $this->filename = "data.txt";
    }

    public function write($item) {
        $fp = fopen($this->filename, "a");
        fwrite($fp, $item);
        fclose($fp);
    }
}
```

```php
class MemStorage {
    protected $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function store($item) {
        $this->data[] = $item;
    }
}
```

```php
class DBMockStorage {
    protected $data;
    protected $dbType;

    public function __construct($dbType, $data) {
      $this->dbType = $dbType;
      $this->data = $data;
    }

    public function databaseType() {
      return $this->dbType;
    }

    public function save($item) {
      $this->data[] = $item;
    }
}
```
