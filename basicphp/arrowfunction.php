<?php
// alternatif anonymous function adalah arrow function
$firstName = "Ade";
$lastName = "Syahlan";

$sayHelloAde = fn() => "Hello $firstName $lastName" . PHP_EOL;
echo $sayHelloAde();
// lebih simpel daripada menggunakan anonymous function
