<?php

// Object Cloning
class Student
{
    public string $id;
    public string $name;
    public int $value;
    private string $sample;

    public function setSample(string $sample): void{
        $this->sample = $sample;
    }
    
 // clone function
    public function __clone()
    {
        unset($this->sample);
    }

// contoh magic function toString
    public function __toString(): string 
    {
        return "Student id ::$this->id, name:$this->value";
    }

// magic function invoke
    public function __invoke(...$arguments): void 
    {
        $join = join(",", $arguments);
        echo "invoke student with arguments $join" . PHP_EOL;
    }
}

