<?php

/*

preg_match ($pattern ,$subject)
preg_match_all ($pattern ,$subject)
Digunakan untuk mencari match pattern
preg_replace ( $pattern , $replacement, $subject)
Digunakan untuk mereplace semua pattern dengan replacement
preg_split ( $pattern , $subject)
Digunakan untuk memotong dengan pattern menjadi array

*/

$matches = []; //reference
$result = (bool)preg_match_all("/rouf|rafa|kitty/i", "Mochamad Abdul Rouf", $matches);

var_dump($result);
var_dump($matches); // menghasilkan eksekusi string mana yang dapat di matches

// contoh saja ini seperti kita ingin replace kata kata kasar di komentar
$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu anjing dan bangsat!");
var_dump($result);
// result kodenya  = string(21) "dasar lu *** dan ***!"

// split kode
$result = preg_split("/[\s,-]/", "Mochamad Abdul Rouf, Abdul, Mochamad-Abdul");
var_dump($result);