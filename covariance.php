<?php

/*

COVARIANCE :
Saat kita meng override function dari parent class, biasanya di child class
kita akan membuat function yang sama dengan function yang di parent
Covariance memungkinkan kita meng override return 
function yang di parent dengan return value yang lebih spesifik

CONTRAVARIANCE :
Sedangkan contravariance adalah memperboleh sebuah child class untuk membuat function
Argument yang lebih tidak spesifik dibadingkan parentnya

*/

// eksekusi kode covariance
require_once "data/animal.php";
require_once "data/food.php";
require_once "data/animal-shelter.php";

$catShelter = new \Data\CatShelter();
$cat = $catShelter->adopt("Luna");
$cat->eat(new \Data\AnimalFood());


$dogShelter = new \Data\DogShelter();
$dog = $dogShelter->adopt("Doggy");
$dog->eat(new \Data\Food()); // karena sudah kita overide jadi langsung saja ke food
