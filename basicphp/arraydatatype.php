<?php
// ARRAY TIPE NUMBER
$names = ["ade", "tyas", "syafa", "aya"];
// mengakses array pada nomor index ke-0
var_dump($names[0]);
// mengubah data pada array dengan value baru
$names[0] = "alan";
// menambah data pada array di posisi paling belakang
$names[4] = "fulana";
// mengkases semua data array
var_dump($names);
// menghapus data pada array
unset($names[4]);
var_dump($names);
// menghitung total data pada array
var_dump(count($names));

// ARRAY ASSOCIATIVE
$ade = [
  "id" => "rock",
  "name" => "Ade",
  "age" => 20,
  "address" => [
    // array di dalam array
    "city" => "Sumbawa",
    "country" => "Indonesia"
  ]
];
var_dump($ade);
var_dump($ade["id"]);
var_dump($ade["address"]["city"]);
var_dump(count($ade));
