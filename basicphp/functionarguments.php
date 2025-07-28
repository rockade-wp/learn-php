<?php
// ini contoh method parameter
/* function sayHello($name) {
  echo "Hello $name". PHP_EOL;
}
sayHello("ade");
sayHello("alan"); */

// ini contoh method dengan menambahkan default argument value
/* function hiStudent($name = "rockade") {
  echo "Hello $name" . PHP_EOL;
}
hiStudent();
hiStudent("alan"); */
// jika ada lebih dari 1 parameter dan ingin menambah default value, disarankan di parameter terakhir

// ini type declaration pada method parameter
/* function sum(int $first, int $last) {
  $total = $first + $last;
  echo "Total $first + $last = $total". PHP_EOL;
}
sum(2, 7);
sum("3", "8");
sum(true, false); */

// variabel length argument list (kemampuan membuat parameter yang menerima banyak value)
// variabel length argument list hanya bisa digunakan pada argument di posisi terakhir
// variabel length argument list secara otomatis membuat argument menjadi array
function sumAll(...$values)
{
  $total = 0;
  foreach ($values as $value) {
    $total += $value;
  }
  echo "Total " . implode("+", $values) . " = $total" . PHP_EOL;
}
sumAll(1, 2, 3, 4, 5, 6, 7, 8, 9);
// jika sudah terlanjur membuat array, misalnya
$values = [1, 2, 3];
// panggil array nya dengan menambahkan ... pada argument methodnya
sumAll(...$values);
