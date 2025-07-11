<?php

require_once "data/student.php";

// magic function debug info
$student1 = new Student();
$student1->id = "1";
$student1->name = "Rouf";
$student1->value = 100;
$student1->setSample("SAMPLE");


var_dump($student1);