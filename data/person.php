<?php

// Class, Object, Properties

class Person
{
    const AUTHOR = "Mochamad Abdul Rouf"; // Constant didalam class
/*
    var string $name;
    var string $address;
    var string $country = "Indonesia"; // Properties Default Value
    var ?string $truck = "null"; // Nullable Properties
    var string $mobil;
*/
    // Function pada object dan mendeklarasikan function tersebut didalam blok class
    /*
    function sayHello(string $name)
    {
        echo "Hello $name" . PHP_EOL;
    }
    */

// this keyword
    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hi, my name is $this->name" . PHP_EOL;
        } else {
            echo "Hi $name, my name is $this->name" . PHP_EOL;
        }
    }

// self keyword
    function info()
    {
        echo "Author : " . person::AUTHOR . PHP_EOL;
    }

// constructor = function yang dibutuhkan saat pertama kali object dibuat
    function __construct(string $name, ?string $address){
        $this->name = $name;
        $this->address = $address;
    }

    // destructor = function yang akan di panggil ketika object di hapus
    function __destruct()
    {
    echo "Object person $this->name is destroyed" . PHP_EOL;
    }
}

