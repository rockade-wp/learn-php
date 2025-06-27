<?php 
// ini adalah operator penugasan aritmatika
$total = 0;
$nasiPadang = 15_000;
$bakso = 15_000;
$jusAlpukat = 10_000;

$total += $nasiPadang;
$total += $bakso;
$total += $jusAlpukat;

var_dump($total);
echo "Total belanjaan anda: Rp" . $total . PHP_EOL;
?>