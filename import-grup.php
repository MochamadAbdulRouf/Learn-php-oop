<?php

require_once "data/conflict.php";
require_once "data/helper.php";

// Import grup 
use Data\One\{Conflict as Conflict1, Dummy, Sample};
use function Helper\{helpMe};

$conflict = new Conflict1();
$dummy = new Dummy();
$sample = new Sample();