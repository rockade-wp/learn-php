<?php
// union ($a + $b): menggabungkan array $a dan $b
// equality ($a == $b): true jika memiliki key value yang sama
// identity ($a === $b): true jika memiliki key value dan posisi yang sama
// inequality ($a != $b): true jika $a dan $b tidak sama
// inequality ($a <> $b): true jika $a dan $b tidak sama (cara 2)
// nonidentity ($a !== $b): true jika tidak identik
$a = [
  "firstName" => "Ade",
  "lastName" => "Syahlan"
];
$b = [
  "lastName" => "Syahlan",
  "firstName" => "Ade"
];
var_dump($a == $b);
var_dump($a === $b);
