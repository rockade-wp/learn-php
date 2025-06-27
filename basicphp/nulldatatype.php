<?php 
$name = "ade";
$name = null;
$age = null;
// untuk mengecek apakah null atau tidak, gunakan function is_null($)
$isNull = is_null($name);
var_dump($isNull);
// menghapus variabel menggunakan function unset($)
unset($age);
// untuk mengecek apakah variabelnya ada atau tidak dan nilainya tidak null, gunakan function isset($)
var_dump(isset($age));
$age = "20";
var_dump(isset($age));
?>