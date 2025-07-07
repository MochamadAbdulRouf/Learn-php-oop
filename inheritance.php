<?php

// inheritance mengakses method parent
require_once "data/manager.php";

$manager = new Manager();
$manager->name = "Rouf";
$manager->sayHello("Abdul");

$vp = new VicePresident();
$vp->name = "Mochamad";
$vp->sayHello("bro rouf");
