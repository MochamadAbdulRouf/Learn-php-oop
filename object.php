<?php

// Object -Oriented Programming (OOP) in PHP
// manipulasi properties

require_once "data/person.php";

$person = new Person();
$person->name = "Rouf";
$person->address = "Blitar";

var_dump($person);

// v2 manipulasi properties
echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

// v3 manipulasi properties
$person2 = new Person();
$person2->name = "Rouf";
$person2->address = "Blitar";
$person2->truck = null;

var_dump($person2);

// Memanggil Function
$person->sayHello("Rouf");

$person3 = new Person();
$person3->name = "Rouf";
$person3->address = "Blitar";
$person3->truck = null;
$person3->mobil = "avansa";

var_dump($person3);
r_dump($person3);