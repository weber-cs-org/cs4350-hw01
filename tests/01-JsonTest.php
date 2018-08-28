<?php

require_once(__DIR__."/../src/01-Json.php");

class JsonTest extends \PHPUnit\Framework\TestCase {
  protected $validJson = '
[
  {
    "_id": "59aa0d900dfcda6239c65abb",
    "index": 0,
    "guid": "719d50ee-de00-4d4c-ad3c-71254262981d",
    "isActive": false,
    "balance": "$3,161.84",
    "picture": "http://placehold.it/32x32",
    "age": 38,
    "eyeColor": "blue",
    "name": {
      "first": "Buck",
      "last": "Whitehead"
    },
    "company": "BOLAX",
    "email": "buck.whitehead@bolax.ca",
    "phone": "+1 (852) 501-2936",
    "address": "537 Mill Street, Fostoria, Marshall Islands, 7585",
    "about": "Adipisicing esse culpa elit dolore velit esse exercitation aliqua commodo culpa ipsum laborum. Exercitation elit incididunt ea laboris magna ea incididunt laborum. Anim laboris consequat commodo labore et. Nisi anim dolor non ullamco labore mollit laborum cillum Lorem labore dolore. Do ipsum dolor incididunt esse ullamco. Ad aliqua magna qui consectetur magna culpa dolore excepteur cillum.",
    "registered": "Saturday, May 23, 2015 8:05 AM",
    "latitude": "78.119425",
    "longitude": "148.885145",
    "tags": [
      "nostrud",
      "pariatur",
      "velit",
      "aute",
      "pariatur"
    ],
    "range": [
      0,
      1,
      2,
      3,
      4,
      5,
      6,
      7,
      8,
      9
    ],
    "friends": [
      {
        "id": 0,
        "name": "Reilly Hines"
      },
      {
        "id": 1,
        "name": "Karen Hess"
      },
      {
        "id": 2,
        "name": "Mullins Scott"
      }
    ],
    "greeting": "Hello, Buck! You have 10 unread messages.",
    "favoriteFruit": "strawberry"
  },
  {
    "_id": "59aa0d9045bdb4312d37c336",
    "index": 1,
    "guid": "1c3603b6-1d38-4769-9c24-be85ecdc6695",
    "isActive": true,
    "balance": "$3,907.86",
    "picture": "http://placehold.it/32x32",
    "age": 38,
    "eyeColor": "green",
    "name": {
      "first": "Autumn",
      "last": "Gillespie"
    },
    "company": "ZENSOR",
    "email": "autumn.gillespie@zensor.net",
    "phone": "+1 (867) 498-3636",
    "address": "584 Clymer Street, Golconda, Idaho, 9995",
    "about": "Anim irure magna sit occaecat. Voluptate et ipsum eu sint officia. Officia laborum deserunt minim anim non. Dolore velit non nulla mollit aliquip incididunt aliqua nulla reprehenderit. Non minim ut voluptate eiusmod nostrud nostrud velit ullamco aliqua sit quis consequat.",
    "registered": "Tuesday, June 2, 2015 6:51 AM",
    "latitude": "-8.246947",
    "longitude": "-72.143573",
    "tags": [
      "irure",
      "commodo",
      "ea",
      "nisi",
      "ea"
    ],
    "range": [
      0,
      1,
      2,
      3,
      4,
      5,
      6,
      7,
      8,
      9
    ],
    "friends": [
      {
        "id": 0,
        "name": "Cora Cantu"
      },
      {
        "id": 1,
        "name": "Deloris Gilliam"
      },
      {
        "id": 2,
        "name": "Farrell Shaffer"
      }
    ],
    "greeting": "Hello, Autumn! You have 7 unread messages.",
    "favoriteFruit": "banana"
  },
  {
    "_id": "59aa0d905dbd0bb14e1021ff",
    "index": 2,
    "guid": "4903e9ca-ac22-40a9-a552-f71cb365da20",
    "isActive": true,
    "balance": "$1,098.39",
    "picture": "http://placehold.it/32x32",
    "age": 27,
    "eyeColor": "blue",
    "name": {
      "first": "Susan",
      "last": "Webb"
    },
    "company": "INSOURCE",
    "email": "susan.webb@insource.io",
    "phone": "+1 (831) 518-2802",
    "address": "837 Cooper Street, Orason, Maryland, 586",
    "about": "Magna fugiat ad irure Lorem consequat. Tempor tempor consectetur commodo eu officia. Eu nisi enim voluptate incididunt fugiat officia aliqua ex magna aute velit in.",
    "registered": "Thursday, April 30, 2015 4:13 PM",
    "latitude": "58.500552",
    "longitude": "-82.773689",
    "tags": [
      "commodo",
      "irure",
      "non",
      "voluptate",
      "nisi"
    ],
    "range": [
      0,
      1,
      2,
      3,
      4,
      5,
      6,
      7,
      8,
      9
    ],
    "friends": [
      {
        "id": 0,
        "name": "Smith Robinson"
      },
      {
        "id": 1,
        "name": "Miller Austin"
      },
      {
        "id": 2,
        "name": "Molina Mitchell"
      }
    ],
    "greeting": "Hello, Susan! You have 5 unread messages.",
    "favoriteFruit": "apple"
  },
  {
    "_id": "59aa0d904149db5e661cc6cf",
    "index": 3,
    "guid": "f1b3a93c-1ddd-4ac2-8e33-1199453fa376",
    "isActive": true,
    "balance": "$1,934.31",
    "picture": "http://placehold.it/32x32",
    "age": 40,
    "eyeColor": "green",
    "name": {
      "first": "Jayne",
      "last": "Hewitt"
    },
    "company": "FLEETMIX",
    "email": "jayne.hewitt@fleetmix.name",
    "phone": "+1 (812) 519-3030",
    "address": "523 Oakland Place, Katonah, District Of Columbia, 9086",
    "about": "Qui quis est quis minim sunt commodo anim voluptate sunt ut reprehenderit fugiat est cillum. Quis cillum aliqua et ut qui occaecat incididunt. Quis nisi consequat incididunt elit enim consectetur aliquip commodo minim ut adipisicing ut laborum. Mollit officia ex ea ea amet exercitation incididunt. Ex labore irure consequat non do dolor reprehenderit proident esse quis laboris duis laboris. Commodo ut excepteur sunt elit consectetur pariatur cillum pariatur. Cillum nisi consequat labore fugiat cillum consectetur occaecat duis ut est.",
    "registered": "Thursday, October 30, 2014 9:01 AM",
    "latitude": "-76.98028",
    "longitude": "67.675426",
    "tags": [
      "enim",
      "laborum",
      "duis",
      "elit",
      "ipsum"
    ],
    "range": [
      0,
      1,
      2,
      3,
      4,
      5,
      6,
      7,
      8,
      9
    ],
    "friends": [
      {
        "id": 0,
        "name": "Potter Woods"
      },
      {
        "id": 1,
        "name": "Stanley Dunn"
      },
      {
        "id": 2,
        "name": "Colon Miles"
      }
    ],
    "greeting": "Hello, Jayne! You have 6 unread messages.",
    "favoriteFruit": "apple"
  },
  {
    "_id": "59aa0d90ddbd75e0afcca94a",
    "index": 4,
    "guid": "241f9942-5bec-49be-8da1-480646c0ad61",
    "isActive": false,
    "balance": "$3,414.54",
    "picture": "http://placehold.it/32x32",
    "age": 38,
    "eyeColor": "blue",
    "name": {
      "first": "Robertson",
      "last": "Church"
    },
    "company": "SPHERIX",
    "email": "robertson.church@spherix.biz",
    "phone": "+1 (988) 486-3156",
    "address": "174 Leonora Court, Guthrie, Arizona, 7642",
    "about": "Dolor dolor cupidatat cupidatat anim magna sint deserunt. Cillum aliqua non labore cupidatat qui irure amet eu magna amet anim excepteur ipsum. Nulla adipisicing culpa exercitation cupidatat dolore ullamco enim. Tempor occaecat incididunt velit culpa irure occaecat reprehenderit elit sint adipisicing sint laboris pariatur laboris. Pariatur dolor deserunt eiusmod tempor incididunt ad aliquip ullamco quis.",
    "registered": "Wednesday, April 6, 2016 11:22 AM",
    "latitude": "42.353399",
    "longitude": "-131.12284",
    "tags": [
      "sunt",
      "velit",
      "ad",
      "reprehenderit",
      "et"
    ],
    "range": [
      0,
      1,
      2,
      3,
      4,
      5,
      6,
      7,
      8,
      9
    ],
    "friends": [
      {
        "id": 0,
        "name": "Madeline Foster"
      },
      {
        "id": 1,
        "name": "Winters Bates"
      },
      {
        "id": 2,
        "name": "Kristin Greer"
      }
    ],
    "greeting": "Hello, Robertson! You have 10 unread messages.",
    "favoriteFruit": "strawberry"
  },
  {
    "_id": "59aa0d90853163c9749fa363",
    "index": 5,
    "guid": "4ef5c72a-1a82-4669-8859-59aa87a5d3dc",
    "isActive": true,
    "balance": "$1,006.50",
    "picture": "http://placehold.it/32x32",
    "age": 35,
    "eyeColor": "blue",
    "name": {
      "first": "Rosanna",
      "last": "Farrell"
    },
    "company": "UNISURE",
    "email": "rosanna.farrell@unisure.biz",
    "phone": "+1 (953) 498-3113",
    "address": "105 Homecrest Avenue, Cartwright, Maine, 6215",
    "about": "Eiusmod dolor mollit consectetur deserunt laborum Lorem eiusmod et non minim ullamco exercitation est. Ut consequat est consequat ut officia quis ex eu consectetur et irure laboris est magna. Incididunt deserunt esse nisi in commodo dolore. Incididunt ex cupidatat deserunt nulla nostrud magna officia est. Nostrud excepteur dolor ipsum voluptate. Laboris consequat fugiat amet ullamco dolor amet commodo fugiat labore nisi. Amet sit adipisicing veniam qui dolore nisi.",
    "registered": "Friday, February 10, 2017 4:20 AM",
    "latitude": "46.78453",
    "longitude": "159.507498",
    "tags": [
      "ullamco",
      "pariatur",
      "veniam",
      "Lorem",
      "magna"
    ],
    "range": [
      0,
      1,
      2,
      3,
      4,
      5,
      6,
      7,
      8,
      9
    ],
    "friends": [
      {
        "id": 0,
        "name": "Fanny Silva"
      },
      {
        "id": 1,
        "name": "Charmaine Case"
      },
      {
        "id": 2,
        "name": "Alford Newton"
      }
    ],
    "greeting": "Hello, Rosanna! You have 7 unread messages.",
    "favoriteFruit": "strawberry"
  },
  {
    "_id": "59aa0d90cabdc772ab0152fc",
    "index": 6,
    "guid": "0c0a6bb4-4077-4e68-9e5e-1df0a69c349d",
    "isActive": true,
    "balance": "$2,412.34",
    "picture": "http://placehold.it/32x32",
    "age": 36,
    "eyeColor": "green",
    "name": {
      "first": "Robert",
      "last": "Kim"
    },
    "company": "NETROPIC",
    "email": "robert.kim@netropic.info",
    "phone": "+1 (962) 468-2759",
    "address": "500 Sullivan Place, Saticoy, Nebraska, 7088",
    "about": "Eiusmod esse magna aute commodo est adipisicing eu id adipisicing. Qui nisi eu eiusmod qui aute non. Ea elit dolore sit nulla sunt mollit laborum et laboris ullamco. In reprehenderit occaecat aute occaecat consectetur excepteur consequat adipisicing ea aliqua. Sunt et fugiat deserunt in proident duis cupidatat cillum quis ullamco in deserunt.",
    "registered": "Saturday, January 24, 2015 7:39 PM",
    "latitude": "71.531735",
    "longitude": "176.576973",
    "tags": [
      "dolore",
      "excepteur",
      "sunt",
      "nisi",
      "tempor"
    ],
    "range": [
      0,
      1,
      2,
      3,
      4,
      5,
      6,
      7,
      8,
      9
    ],
    "friends": [
      {
        "id": 0,
        "name": "Stephens Gonzales"
      },
      {
        "id": 1,
        "name": "Hurley Espinoza"
      },
      {
        "id": 2,
        "name": "Abbott Walker"
      }
    ],
    "greeting": "Hello, Robert! You have 9 unread messages.",
    "favoriteFruit": "strawberry"
  },
  {
    "_id": "59aa0d903257f00140312b8e",
    "index": 7,
    "guid": "d7221ae2-6812-4280-aba5-ca88b2f064a0",
    "isActive": true,
    "balance": "$3,193.92",
    "picture": "http://placehold.it/32x32",
    "age": 22,
    "eyeColor": "blue",
    "name": {
      "first": "Ina",
      "last": "Burch"
    },
    "company": "PROSELY",
    "email": "ina.burch@prosely.org",
    "phone": "+1 (843) 450-2064",
    "address": "449 Dover Street, Tonopah, North Dakota, 5045",
    "about": "Labore sit sunt do mollit. Ex anim commodo ipsum in. Veniam ipsum nulla veniam ullamco eu excepteur laboris sunt eiusmod in eiusmod nulla. Minim aliqua ex exercitation duis officia adipisicing nulla est eu est eu labore mollit.",
    "registered": "Sunday, May 24, 2015 10:35 AM",
    "latitude": "-64.368576",
    "longitude": "-147.603105",
    "tags": [
      "dolore",
      "et",
      "esse",
      "consequat",
      "proident"
    ],
    "range": [
      0,
      1,
      2,
      3,
      4,
      5,
      6,
      7,
      8,
      9
    ],
    "friends": [
      {
        "id": 0,
        "name": "Mcdonald Peters"
      },
      {
        "id": 1,
        "name": "Brandy Martinez"
      },
      {
        "id": 2,
        "name": "Bullock Herman"
      }
    ],
    "greeting": "Hello, Ina! You have 9 unread messages.",
    "favoriteFruit": "strawberry"
  },
  {
    "_id": "59aa0d90e4f2bb521088c352",
    "index": 8,
    "guid": "9c777a93-a81b-4c92-bafe-48b9cd4b9a70",
    "isActive": false,
    "balance": "$3,250.36",
    "picture": "http://placehold.it/32x32",
    "age": 35,
    "eyeColor": "green",
    "name": {
      "first": "Baker",
      "last": "Cash"
    },
    "company": "FLOTONIC",
    "email": "baker.cash@flotonic.com",
    "phone": "+1 (869) 416-2316",
    "address": "674 Etna Street, Coaldale, Pennsylvania, 5772",
    "about": "Mollit consequat aliquip et eu velit incididunt sunt non aliquip anim esse ullamco duis. Mollit ea mollit consectetur deserunt cupidatat consectetur esse magna fugiat id aliquip aliquip consectetur aliqua. Commodo do non in labore ex aute commodo laborum dolore. Cupidatat eu eu enim est quis excepteur qui.",
    "registered": "Sunday, November 20, 2016 2:02 PM",
    "latitude": "-38.365569",
    "longitude": "118.45067",
    "tags": [
      "sint",
      "eiusmod",
      "voluptate",
      "eiusmod",
      "nulla"
    ],
    "range": [
      0,
      1,
      2,
      3,
      4,
      5,
      6,
      7,
      8,
      9
    ],
    "friends": [
      {
        "id": 0,
        "name": "Pat Macias"
      },
      {
        "id": 1,
        "name": "Barber Lancaster"
      },
      {
        "id": 2,
        "name": "Hollie Christian"
      }
    ],
    "greeting": "Hello, Baker! You have 6 unread messages.",
    "favoriteFruit": "apple"
  },
  {
    "_id": "59aa0d905212e21397722cb1",
    "index": 9,
    "guid": "67c54b10-d577-4350-9d87-5e340149db23",
    "isActive": true,
    "balance": "$3,886.89",
    "picture": "http://placehold.it/32x32",
    "age": 23,
    "eyeColor": "blue",
    "name": {
      "first": "Juanita",
      "last": "Bennett"
    },
    "company": "ISOPOP",
    "email": "juanita.bennett@isopop.co.uk",
    "phone": "+1 (807) 415-3395",
    "address": "698 Highland Place, Rosburg, Indiana, 6393",
    "about": "Officia eu id elit dolor proident consectetur reprehenderit. Minim eiusmod aliquip tempor amet eiusmod irure qui amet exercitation. Esse commodo cillum incididunt id magna ex eu elit magna veniam ea. Voluptate do pariatur elit esse anim ut est dolor id reprehenderit voluptate dolore nisi.",
    "registered": "Saturday, February 27, 2016 7:20 PM",
    "latitude": "-11.156708",
    "longitude": "108.935756",
    "tags": [
      "veniam",
      "aliqua",
      "aliqua",
      "officia",
      "proident"
    ],
    "range": [
      0,
      1,
      2,
      3,
      4,
      5,
      6,
      7,
      8,
      9
    ],
    "friends": [
      {
        "id": 0,
        "name": "Lester Cochran"
      },
      {
        "id": 1,
        "name": "Gena Rojas"
      },
      {
        "id": 2,
        "name": "Julie Thompson"
      }
    ],
    "greeting": "Hello, Juanita! You have 9 unread messages.",
    "favoriteFruit": "banana"
  }
]';

  protected $invalidJson = '{"foo";"bar"}';

  public function testDecodeValidJson00() {
    // arrange
    $expected = json_decode($this->validJson, TRUE);
    // act
    $actual = DecodeValidJson($this->validJson);
    // assert
    $this->assertEquals($expected, $actual);
  }

  public function testDecodeValidJson01() {
    // arrange
    $expected = json_decode($this->invalidJson, TRUE);
    // act
    $actual = DecodeValidJson($this->invalidJson);
    $actual = json_last_error();
    // assert
    $this->assertEquals(JSON_ERROR_SYNTAX, $actual);
  }

  public function testDecodeJson00() {
    // arrange
    $expected = json_decode($this->validJson, TRUE);
    // act
    $actual = DecodeJson($this->validJson);
    // assert
    $this->assertEquals($expected, $actual);
  }

  public function testDecodeJson01() {
    // arrange
    $expected = "Syntax error, malformed JSON";
    // act
    $actual = DecodeJson($this->invalidJson);
    // assert
    $this->assertEquals($expected, $actual);
  }
}
