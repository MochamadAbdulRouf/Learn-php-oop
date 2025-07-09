<?php

require_once "data/manager.php";

// Function Overriding
$manager = new Manager();
$manager->name = "Mochamad";
$manager->sayHello("Abdul");

$vp = new VicePresident();
$vp->name = "Rouf";
$vp->sayHello("Abdul");
