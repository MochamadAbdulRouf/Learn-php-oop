<?php

require_once "data/student.php";

// comparing object

$student1 = new Student();
$student1->id = "1";
$student1->name = "Rouf";
$student1->value = 100;

$student2 = new Student();
$student2->id = "1";
$student2->name = "Rouf";
$student2->value = 100;

var_dump($student1 == $student2); // jika kedua object value tidak sama maka hasilnya false lalu sebaliknya
var_dump($student1 === $student2); // Jika kedua object namanya tidak sama maka hasilnya false
var_dump($student1 === $student1); // Nah kalau begini baru hasilnya true jika pakai "==="

/*
- operator equals == . equals membandingkan semua properties yang terdapat di object
  tersebut, dan tiap properties juga akan dibandingkan menggunakan operator == (equals)

- operator operator === . (identity), maka akan memdandingkan apakah
  object identik, artinya mengacu ke object yang sama
*/
