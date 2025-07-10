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
}

