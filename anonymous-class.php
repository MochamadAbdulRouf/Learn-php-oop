<?php

interface HelloWorld
{
    function sayHello(): void;
}

// Anonymous Class
$helloWorld = new class("Rouf") implements HelloWorld {

    public string $home;

    public function __construct(string $name){
        $this->name = $name;
    }

    public function sayHello(): void 
    {
        echo "Hello $this->name" . PHP_EOL;
    }
};

$helloWorld->sayHello();