<?php
// konversi ke number dan sebaliknya
$valueString = (string) 100;
var_dump($valueString);

$valueInt = (int) "100";
var_dump($valueInt);

$valueFloat = (float) "100.1";
var_dump($valueFloat);

// mengakses karakter
$name = "ADE";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;

// variabel parsing (harus memakai double quote atau heredoc)
$userName = "rockade";
echo "Learn Basic PHP with $userName" . PHP_EOL;

// curly brace => menggabungkan variabel dengan string tanpa ada spasi
$var = "var";
echo "This is {$var}s" . PHP_EOL;
