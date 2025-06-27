<?php 
// return value 1 beserta return type declaration ( ($firstName, $lastName) : string)
function students(string $firstName, string $lastName) : string {
  return "$firstName $lastName";
}
$student = students("Ade", "Syahlan");
echo $student . PHP_EOL;
$student = students("Fulan", "Fulana");
var_dump($student);

// return value 2 beserta return type declaration
function getFinalValue(int $value) : string {
  if ($value >= 80) {
    return "A";
  } elseif ($value >= 70) {
    return "B";
  } elseif ($value >= 60) {
    return "C";
  } elseif ($value >= 50) {
    return "D";
  } else {
    return "E";
  }
}
$score = getFinalValue("99");
var_dump($score);
$score = getFinalValue("56");
var_dump($score);
// catatan tambahan, setelah menggunakan return, nilai dibawah nya tidak akan dieksekusi lagi
?>