<?php

require_once "data/product.php";

$product = new Product("Martabak", 15000);

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$dumy = new ProductDummy("Dummy", 1000);
$dumy->info();