<?php

// Trait di PHP OOP
namespace Data\Traits;

trait SayGoodBye
{
    function goodBye(?string $name): void 
    {
        if (is_null($name)) {
            echo "Good Bye" . PHP_EOL;
        } else {
            echo "Good Bye $name" . PHP_EOL;
        }
    }
}

trait SayHello
{
    function hello(?string $name): void 
    {
        if (is_null($name)) {
            echo "hello" . PHP_EOL;
        } else {
            echo "hello $name" . PHP_EOL;
        }
    }
}

// Trait Properties
trait HasName
{
    public string $name; 
}

trait CanRun
{
    public abstract function run(): void;
}

// Trait Overriding
class ParentPerson {
    public function goodBye(?string $name): void
    {
        echo "Good Bye in Person" . PHP_EOL;
    }

    public function hello(?string $name): void 
    {
        echo "Hello in Person" . PHP_EOL;
    }
}
// Trait Inheritance
trait All{
    use SayGoodBye, SayHello, HasName, CanRun{
        // Bisa di override
        // hello as private;
        // goodbye as private;
    }
}

class Person extends ParentPerson
{
    use All;

    public function run(): void
    {
        echo "Person $this->name is running" . PHP_EOL;
    }
}