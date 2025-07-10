<?php

require_once "data/say-goodbye.php";

use Data\Traits\{Person, SayHello, SayGoodBye};
$person = new Person();
$person->goodbye("Rouf");
$person->hello("Abdul");

$person->name = "Mochamad Abdul Rouf";
var_dump($person);

$person->run();