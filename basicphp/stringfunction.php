<?php 
// join() / implode() => menggabungkan array menjadi string
var_dump(join(",", [1, 2, 3, 4, 5, 6, 7]));
// explode() => memecah string menjadi array
var_dump(explode(" ", "Ade Syahlan"));
// strtolower() => mengubah string menjadi lowercase
var_dump(strtolower("ADE SYAHLAN"));
// strtoupper() => mengubah string menjadi uppercase
var_dump(strtoupper("ade syahlan"));
// trim() => menghapus whitespace di depan dan belakang string
var_dump(trim(      "ade"      ));
// substr() => mengambil sebagian string
var_dump(substr("Ade Syahlan", 0, 3));
?>