<?php
// reference bisa juga disebut alias

// assign by reference => membuat beberapa variable menuju ke value yang sama
$name = "alan";
$otherName = &$name;
$otherName = "ade";

echo $name . PHP_EOL;

// pass by reference => mengirim data ke function dengan reference
function increment(int &$value)
{
  $value++;
}
$counter = 1;
increment($counter);

echo $counter . PHP_EOL;

// returning reference => mengembalikan reference pada function (tapi perlu hati hati, fitur ini bisa membingungkan)
function &getValue()
{
  static $value = 100;
  return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();
echo $b . PHP_EOL;
