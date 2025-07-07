<?php

require_once "data/person.php"; // mengakses constant di class
define("APPLICATION", "Learn PHP OOP");
const APP_VERSION = "1.2.2";

echo APPLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;
echo person::AUTHOR . PHP_EOL; // akses constant di class