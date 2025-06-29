<?php
require_once "data/Person.php";

// manipulasi properties
$person1 = new Person();
$person1->name = "Ade";

var_dump($person1) . PHP_EOL;
echo "Name: {$person1->name}" . PHP_EOL;
echo "Address: {$person1->address}" . PHP_EOL;
echo "Country: {$person1->country}" . PHP_EOL;

$person2 = new Person();
$person2->name = "Alan";

var_dump($person2) . PHP_EOL;
echo "Name: {$person2->name}" . PHP_EOL;
echo "Address: {$person2->address}" . PHP_EOL;
echo "Country: {$person2->country}" . PHP_EOL;
