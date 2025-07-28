<?php
function sayHello()
{
  echo "Hello function" . PHP_EOL;
}
sayHello();

// bisa juga dalam if statement
$hi = true;
if ($hi) {
  function sayHi()
  {
    echo "Hi juga, bro!" . PHP_EOL;
  }
}
sayHi();
