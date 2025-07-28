<?php
// bisa menggantikan if statement jika kasus nya singkat, menggunakan keyword (?)

// bukan ternary operator
/* $gender = "PRIA";
$hi = null;

if ($gender == "PRIA") {
  $hi = "Hai bro!";
} else {
  $hi = "Hai kak!";
}
echo $hi . PHP_EOL; */

// ternary operator
$gender = "PRIA";
$hi = $gender == "PRIA" ? "Hi, bro" : "Hi, kak";

echo $hi . PHP_EOL;
