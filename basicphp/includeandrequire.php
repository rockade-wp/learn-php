<?php
// include => jika file yang diambil tidak ada, hanya akan diberi peringatan dan program akan tetap jalan
// require => jika file yang diambil tidak ada, maka akan error
// gunakan include_once atau require_once untuk menghindari error jika file yang di include dideklarasikan berulang kali

// require "lib/myfunction.php";
require_once "lib/myfunction.php";
echo sayHello("Ade", "Syahlan");
