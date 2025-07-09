<?php

// Visibility / Access modifier
class Product
{   
    // untuk akses ke private cukup buat public function
    // buat jadi protected supaya..
    protected string $name; // cara supaya turunan dari Product yaitu ProductDummy bisa di akses
    protected int $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }
}

class ProductDummy extends Product
{

    public function info()
    {
        echo "Name $this->name" . PHP_EOL;
        echo "Price $this->price" . PHP_EOL;
    }
}
