<?php

// Abstract Function

namespace Data;

// require ke function contravariance
require_once "food.php";

abstract class Animal
{
    public string $name;

    abstract public function run(): void;

    abstract public function eat(AnimalFood $animalFood): void;
}

class Cat extends Animal 
{
    public function run(): void
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }

    
    public function eat(AnimalFood $animalFood): void
    {
        echo "Cat is eating" . PHP_EOL;
    }
}

class Dog extends Animal
{
    public function run(): void 
    {
        echo "Dog $this->name is running" . PHP_EOL;
    }

    
    // contravariance. dari child kita jadikan parent
    public function eat(Food $animalFood): void
    {
        echo "Dog is eating" . PHP_EOL;
    }
}