<?php

require_once "data/conflict.php";
require_once "data/helper.php";

// function dan cons menggunakan import (import menggunakan kode use)
use Data\One\Conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;


$conflict1 = new Conflict();
$conflict2 = new Data\Two\Conflict();

helpme();

echo APPLICATION . PHP_EOL;
