<?php

require_once "data/Person.php";

$person = new Person("Rouf", "Blitar");
$person->name = "Rouf";
$person->address = "Blitar";

var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

$person2 = new Person("Abdul", null);
$person2->name = "Abdul";
$person2->address = null;

var_dump($person2);

// error
// $person2->name = [];