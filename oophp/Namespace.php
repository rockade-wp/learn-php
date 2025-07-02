<?php
require_once "data/Conflict.php";
require_once "data/Helper.php";

$conflict1 = new \Data\One\Conflict(); // membuat object dari class yang ada di namespace
$conflict2 = new \Data\Two\Conflict();

Helper\helpMe(); // memanggil method yang ada di namespace
echo Helper\APPLICATION . PHP_EOL; // memanggil constant yang ada di namespace
