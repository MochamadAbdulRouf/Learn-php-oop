<?php

// magic function Invoke
require_once "data/student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Rouf";
$student1->value = 100;

$student1(1, "Rouf", true, "Mochamad");