<?php

// Konversi Array ke stdClass

$array = [
    "FirstName" => "Mochamad",
    "MiddleName" => "Abdul",
    "LastName" => "Rouf"
];

$object = (object) $array;

// Konversi array ke object
var_dump($object);

echo "First Name $object->FirstName" . PHP_EOL;
echo "Middle Name $object->MiddleName" . PHP_EOL;
echo "Last Name $object->LastName" . PHP_EOL;

$arrayLagi = (array) $object;
var_dump($arrayLagi);

require_once "data/person.php";

$person = new Person("Rouf", "Abdul");
var_dump($person);

$arrayPerson = (array) $person;
var_dump($arrayPerson);