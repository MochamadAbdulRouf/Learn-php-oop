<?php

require_once "data/animal.php";

#Cara eksekusi kode abstract function
use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "Luna";
$cat->run();

$dog = new Dog();
$dog->name = "Bedy";
$dog->run();