<?php
require_once "data/Product.php";

$product = new Product("Laptop", 10_000_000);
echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$productDummy = new ProductDummy("Smartphone", 2_000_000);
$productDummy->info() . PHP_EOL;
