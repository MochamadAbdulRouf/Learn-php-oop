<?php

// Class,Object,Properties

class Person
{
    var string $name;
    var string $address;
    var string $country = "Indonesia"; // Properties Default Value
    var ?string $truck = "null"; // Nullable Properties
    var string $mobil;

// Function pada object dan mendeklarasikan function tersebut didalam blok class
    function sayHello(string $name)
    {
        echo "Hello $name" . PHP_EOL;
    }
}

/* This Keyword (error)
    function sayHello(?string $name)
    {
        if (is_null($name1)) {
            echo "Hi, my name is $this->name1" . PHP_EOL;
        } else {
            echo "Hi $name1, my name is $this->name1" . PHP_EOL;
        }
    }
*/