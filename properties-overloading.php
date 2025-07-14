<?php

/*

Properties Overloading

 __set($name, $value) : void
Dieksekusi ketika mengubah properties yang tidak tersedia
__get($name) : mixed
Dieksekusi ketika mengakses properties yang tidak tersedia
__isset ($name ) : bool
Dieksekusi ketika mengecek isset() atau empty() properties yang tidak tersedia
__unset($name) : void
Dieksekusi ketika menggunakan unset() properties yang tidak tersedia

*/

/* 

Magic function untuk function overloading

1. __call( $name, $arguments ) : mixed = di eksekusi ketika memanggil function yang tidak tersedia

2. static __callStatic ($name, $arguments) : mixed = di eksekusi ketika memanggil static function yang tidak tersedia

*/


class Zero
{
    private array $properties = [];


    public function __get($name)
    {
        return $this->properties[$name];
    }

    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }

    public function __isset($name): bool
    {
        return isset($this->properties[$name]);
    }

    public function __unset($name)
    {
        unset($this->properties[$name]);
    }

    // magic function untuk function overloading
    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call function $name with arguments $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call static function $name with arguments $join" . PHP_EOL;
    }
}

$zero = new Zero();
$zero->firstName = "Mochamad";
$zero->middleName = "Abdul";
$zero->lastName = "Rouf";

echo "First Name : $zero->firstName" . PHP_EOL;
echo "Middle Name : $zero->middleName" . PHP_EOL;
echo "Last Name : $zero->lastName" . PHP_EOL;

// eksekusi magic function ke overloading
$zero->sayHello("Mochamad", "Abdul Rouf");
Zero::sayHello("Mochamad", "Abdul Rouf");