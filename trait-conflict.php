<?php


// Trait conflict
trait A 
{
    function doA(): void 
    {
        echo "a" . PHP_EOL;
    }

    function doB(): variant_mod
    {
        echo "b" . PHP_EOL;
    }
}

trait B 
{
    function doA(): void 
    {
        echo "A" . PHP_EOL;
    }

    function doB(): void
    {
        echo "B" . PHP_EOL;
    }
}

// cara mengatasi masalah conflict di trait
class Sample
{
    use A, B {
        A::doA insteadof B;
        B::doB insteadof A;
    }
}

$sample = new Sample();
$sample->doA();
$sample->doB();



