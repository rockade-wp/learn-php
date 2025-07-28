<?php
// cocok untuk kasus faktorial

// ini menggunakan looping
function faktorialLoop(int $value): int
{
  $total = 1;
  for ($i = 1; $i <= $value; $i++) {
    $total *= $i;
  }
  return $total;
}
var_dump(faktorialLoop(4));

// ini menggunakan recursive faktorial (function)
function faktorialRecursive(int $value): int
{
  if ($value == 1) {
    return 1;
  } else {
    return $value * faktorialRecursive($value - 1);
  }
}
var_dump(faktorialRecursive(3));
// namun, hati hati menggunakan recursive function, karna jika value nya sangat banyak maka akan terjadi error / stackoverflow
// dikarenakan stack nya akan terus menumpuk dan membebani memory
// jika value nya sangat banyak, lebih baik menggunakan looping biasa untuk kasus faktorial
