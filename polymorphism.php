<?php

require_once "data/devops.php";

$company = new Company();
$company->devops = new Devops("Rouf");
var_dump($company);

$company->devops = new DockerDevops("Rouf");
var_dump($company);

$company->devops = new JenkinsDevops("Rouf");
var_dump($company);

/*
jika kita sudah setting polymorphism maka class lainnya tidak
akan bisa di deklarasikan contoh jika disini saya gabungkan yang
manager.php lalu saya run akan terjadi error karena class Devops harus Devops 
disini
*/
// done

/* 
Walau parameter di data/devops.php adalah Devops saja namun
disini kita bisa memakai semua turunan dari class Devops, 
Maka dari itu polymorphism sangat berkaitan dengan inheritance.
*/ 
sayHelloDevops(new Devops("Rouf"));
sayHelloDevops(new DockerDevops("Rouf"));
sayHelloDevops(new JenkinsDevops("Rouf"));

// Type check dan Casts
sayHelloDevopsv2(new Devops("Rouf"));
sayHelloDevopsv2(new DockerDevops("Rouf"));
sayHelloDevopsv2(new JenkinsDevops("Rouf"));
