<?php 
require_once "data/Person.php";

$person1 = new Person();
$person1->name = "Ade";
$person1->address = "Uma Sima";

var_dump($person1). PHP_EOL;
echo "Name: {$person1->name}". PHP_EOL;
echo "Phone: {$person1->phone}". PHP_EOL;
echo "Address: {$person1->address}". PHP_EOL;
echo "Country: {$person1->country}". PHP_EOL;

$person2 = new Person();
$person2->name = "Alan";
$person2->address = "Brang Ene";

var_dump($person2). PHP_EOL;
echo "Name: {$person2->name}". PHP_EOL;
echo "Phone: {$person2->phone}". PHP_EOL;
echo "Address: {$person2->address}". PHP_EOL;
echo "Country: {$person2->country}". PHP_EOL;

?>