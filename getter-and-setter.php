<?php

require_once "data/category.php";

$category = new Category();
$category->setName("Handphone");
$category->setExpensive(true);

$category->setName(""); //Jadi walau kita kosongkan stringnya maka akan tetap terisi
echo "Name : {$category->getName()}" . PHP_EOL;
echo "Expensive : {$category->isExpensive()}" . PHP_EOL;

/* 
getter and setter berguna untuk protect pada data kita di php.
contohnya kalau expensive tidak boleh di ekspos ke luar jangan bikin
getter methodnya
*/