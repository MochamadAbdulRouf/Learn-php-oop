<?php

require_once "data/location.php";
//Abstract Class
use Data\{Location, City, Province, Country};

// $location = new Location(); ERROR

// code yang benar
$city = new City();
$province = new Province();
$country = new Country();