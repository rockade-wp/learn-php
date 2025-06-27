<?php 
$data = [1, 2, 3, 4, 5];
// array_map() => mengubah semua data array dengan callback
$mapFunction = fn(int $value) => $value * 10;
$dataResult = array_map($mapFunction, $data);
var_dump($dataResult);
// rsort() => mengurutkan array terbalik
rsort($data);
var_dump($data);

$person = [
  "firstName" => "ade",
  "lastName" => "syahlan"
];
// array_keys() => mengambil semua keys milik array
var_dump(array_keys($person));
// array_values() => mengambil semua values milik array
var_dump(array_values($person));
?>