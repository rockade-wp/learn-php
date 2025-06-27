<?php 
echo 'Nama: ';
echo 'Ade Syahlan';

echo "\n";
echo "Nama: ";
echo "Ade Syahlan";
echo "\n";

echo <<<ADE
ini adalah heredoc, fitur untuk membuat multiline string
ga perlu membuat ENTER secara manual, bisa "Quote" juga bos
fitur ini sama seperti menggunakan double quote

ADE;

echo <<<'ADE'
kalau ini adalah nowdoc, fitur ini sama seperti single quote
hanya saja ini bisa multiline string
berbeda dengan heredoc, nowdoc tidak memiliki kemampuan parsing
ADE;
?>