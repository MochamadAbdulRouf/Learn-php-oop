<?php

// getter and setter method
class Category
{
    private string $name;
    private bool $expensive;

    public function getName(): string 
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        /*
        kita akan buat supaya jika data trim yang diterima 
        kosong maka kita tidak akan mau menerima datanya
        */
        if(trim($name) != ""){
            $this->name = $name;
        }
    }

    public function isExpensive(): bool
    {
        return $this->expensive;
    }

    public function setExpensive(bool $expensive): void 
    {
        $this->expensive = $expensive;
    }
}