<?php
function sayHello(string $name, callable $filter)
{
  $finalName = call_user_func($filter, $name);
  echo "Hello $finalName" . PHP_EOL;
}

sayHello("Ade", "strtoupper");
sayHello("Ade", "strtolower");
sayHello("Ade", function (string $name): string {
  return strtoupper($name);
});
sayHello("Ade", fn($name) => strtolower($name));
