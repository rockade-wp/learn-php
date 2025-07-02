<?php
class Person
{
  const AUTHOR = "rockade"; // constant

  var string $name; // type properties
  var ?string $address = null; // nullable properties
  var ?string $country = "Indonesia"; // properties default value

  // constructor adalah method yang akan dipanggil saat pertama kali object dibuat
  // contoh : $person = new Person("masukkan parameter constructornya")
  function __construct(string $name, ?string $country) // ini adalah constructor
  {
    $this->name = $name;
    $this->country = $country;
  }

  function sayHello(?string $name) // nullable method
  {
    if (is_null($name)) {
      echo "Hi, my name is {$this->name}" . PHP_EOL; // this keyword (untuk mengakses object saat ini)
    } else {
      echo "Hello $name, my name is {$this->name}" . PHP_EOL;
    }
  }

  function info()
  {
    echo "Author: " . self::AUTHOR . PHP_EOL; // self keyword (untuk mengakses class saat ini)
  }

  function __destruct()
  {
    echo "Object person {$this->name} is destroyed" . PHP_EOL;
  }
}
