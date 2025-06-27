<?php 
require_once "data/Person.php";

$rockade = new Person();
$rockade->name = "rockade";
$rockade->sayHello(null);

$ronaldo = new Person();
$ronaldo->name = "Cristiano, SIIUUUUUUU!";
$ronaldo->sayHello("rockade");
?>