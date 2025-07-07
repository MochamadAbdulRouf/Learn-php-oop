<?php

require_once "data/person.php";


$rouf = new Person("Rouf", "Blitar");
$rouf->name = "Rouf";
$rouf->sayHello("Abdul");

$abdul = new Person("Abdul", "Blitar");
$abdul->name = "Abdul";
$abdul->sayHello(null);

$rouf->info();
$abdul->info();