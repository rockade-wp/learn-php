<?php 
// $a++ : post increment (kembalikan $a, lalu naikkan 1 angka)
// ++$a : pre increment (naikkan 1 angka, lalu kembalikan $a)
// $a-- : post decrement (kembalikan $a, lalu turunkan 1 angka)
// --$a : pre decrement (turunkan 1 angka, lalu kembalikan $a)
$a = 6;
$x = $a++;
$y = ++$a;

var_dump($x);
var_dump($y);
?>