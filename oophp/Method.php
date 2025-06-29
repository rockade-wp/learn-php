<?php
require_once "data/Person.php";

$rockade = new Person();
$rockade->name = "rockade";
$rockade->sayHello(null); // memanggil method

$ronaldo = new Person();
$ronaldo->name = "Cristiano, SIIUUUUUUU!";
$ronaldo->sayHello("rockade"); // memanggil method

$rockade->info(); // memanggil method info yang memiliki constant
$ronaldo->info(); // memanggil method info yang memiliki constant