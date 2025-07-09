<?php

class Devops
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class DockerDevops extends Devops{}
{

}

class JenkinsDevops extends Devops{}
{

}

// Polymorphism
class Company
{
    public Devops $devops;
}

function sayHelloDevops(Devops $devops){
    echo "Hello Devops $devops->name" . PHP_EOL;
}

// Type Check dan Casts
function SayHelloDevopsv2(Devops $devops)
{
    if ($devops instanceof DockerDevops) {
        echo "Hello Docker $devops->name" . PHP_EOL;
    } else if ($devops instanceof JenkinsDevops) {
        echo "Hello Jenkins $devops->name" . PHP_EOL;
    }else if ($devops instanceof Devops) {
        echo "Hello Devops $devops->name" . PHP_EOL;
    }
}

