<?php 
class Person {
  var string $name;
  var ?int $phone = null;
  var string $address;
  var string $country = "Indonesia";

  function sayHello(?string $name) {
    if (is_null($name)) {
      echo "Hi, my name is $this->name". PHP_EOL;
    } else {
      echo "Hello $name, my name is $this->name". PHP_EOL;
    }
  }
}
?>