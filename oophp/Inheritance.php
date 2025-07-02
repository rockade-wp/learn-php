<?php
require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Haya";
$manager->sayHello("Alan");

$vp = new VicePresident();
$vp->name = "Tyas";
$vp->sayHello("Syafa");
