<?php
$sayHello = function (string $name) {
  echo "Hello $name" . PHP_EOL;
};
$sayHello("Ade");

// anonymous function sebagai argument
function sayGoodBye(string $name, $filter)
{
  $finalName = $filter($name);
  echo "Good Bye $finalName" . PHP_EOL;
}
// cara 1
sayGoodBye("Ade", function (string $name): string {
  return strtolower($name);
});
// cara 2
$filterFunction = function (string $name): string {
  return strtoupper($name);
};
sayGoodBye("ade", $filterFunction);

// mengakses variabel diluar closure / anonymous function
$firstName = "Ade";
$lastName = "Syahlan";
$sayHelloAde = function () use ($firstName, $lastName) {
  echo "Hello $firstName $lastName" . PHP_EOL;
};
$sayHelloAde();
