<?php

namespace Data;

// Interface dan inheritance
interface HasBrand
{
    function getBrand(): string;
}

interface IsMaintenance
{
    function isMaintenance(): bool;
}

interface Car extends HasBrand // extends antar interface boleh kalau class jangan
{
  function drive(): void;

  function getTire(): int;
}

// Multiple Interface Inheritance
class Avanza implements Car, isMaintenance {
    public function drive(): void
    {
        echo "drive Avanza" . PHP_EOL;
    }

    public function getTire(): int
    {
        return 4;
    }

    public function getBrand(): string
    {
        return "Toyota";
    }

    public function isMaintenance(): bool
    {
        return false;
    }
}