<?php

require_once "data/conflict.php";
require_once "data/helper.php";

//Membuat Object dari namespace
$conflict1 = new Data\One\Conflict();
$conflict2 = new Data\Two\Conflict();

// helper function dan constant namespace
echo Helper\APPLICATION . PHP_EOL;
Helper\helpMe();