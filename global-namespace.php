<?php
// global namespace
namespace {
    require_once "data/conflict.php";
    require_once "data/helper.php";

    $conflict1 = new Data\One\Conflict();
    $conflict2 = new Data\Two\Conflict();

    // helper function dan constant namespace global
    echo Helper\APPLICATION . PHP_EOL;
    Helper\helpMe();   
}