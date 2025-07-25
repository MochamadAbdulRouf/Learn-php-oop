<?php

// inheritance oop php
class Manager {

    var string $name;

    var string $title;

    // Constructor Overriding dan menambahkan default value supaya function overriding tidak error
    public function __construct(string $name = "", string $title = "Manager"){
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello(string $name): void
    {
        echo "Hi $name, my name is Manager $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager 
{

    public function __construct(string $name = "")
    {
        // jika di atas ada constructor maka di rekomendasikan memanggil constructor di atasnya
        // Tidak Wajib, Tapi direkomendasikan
        parent::__construct($name, "VP");
    }


    function sayHello(string $name): void
    {                                    // Untuk function Overriding
        echo "Hi $name, my name is VP $this->name" . PHP_EOL;
    }
}
