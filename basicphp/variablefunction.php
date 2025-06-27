<?php 
function foo() {
  echo "Foo". PHP_EOL;
}
function bar() {
  echo "Bar". PHP_EOL;
}

$functionYangAkanDipanggil = "foo";
$functionYangAkanDipanggil();
$functionYangAkanDipanggil = "bar";
$functionYangAkanDipanggil();

// contoh nyata
function sayHello(string $name, $filter) {
  $finalName = $filter($name);
  echo "Hello $finalName". PHP_EOL;
}
function sampleFunction(string $name) : string {
  return "bro $name";
}
sayHello("ade", "sampleFunction");
sayHello("ade", "strtolower");
sayHello("ade", "strtoupper");
?>