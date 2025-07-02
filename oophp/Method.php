<?php
require_once "data/Person.php";

$rockade = new Person("Ade", "Indonesia");
$rockade->name = "rockade";
$rockade->sayHello(null); // memanggil method

$ronaldo = new Person("Ronaldo", "Portugal");
$ronaldo->name = "Cristiano, SIIUUUUUUU!";
$ronaldo->sayHello("rockade"); // memanggil method

$rockade->info(); // memanggil method info yang memiliki constant
$ronaldo->info(); // memanggil method info yang memiliki constant