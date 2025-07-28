<?php
// php memiliki 3 jenis variable scope
// global, local, static

$globalName = "ade"; // global scope
function createName()
{
  // cara mengakses variable global:
  // cara 1, menggunakan global keyword
  // global $globalName;
  // cara 2, menggunakan global variable
  $GLOBALS["globalName"];

  $localName = "alan"; // local scope
  echo "Hello {$GLOBALS["globalName"]} & $localName" . PHP_EOL;
}
createName();

function increment()
{
  static $counter = 1; // static scope
  echo "Counter = $counter" . PHP_EOL;
  $counter++;
}
// jika tidak ada static keyword, maka siklus hidup local scope akan langsung selesai setelah functionnya dieksekusi
increment();
increment();
increment();
