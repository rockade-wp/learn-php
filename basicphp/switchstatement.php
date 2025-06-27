<?php 
$pilihWarna = "1";

switch ($pilihWarna) {
  case '1':
    echo "Warna yang kamu pilih adalah warna PUTIH";
    break;
  case '2':
    echo "Warna yang kamu pilih adalah warna HIJAU";
    break;
  case '3':
    echo "Warna yang kamu pilih adalah warna MERAH";
    break;
  case '4':
    echo "Warna yang kamu pilih adalah warna BIRU";
    break;
  case '5':
    echo "Warna yang kamu pilih adalah warna ABU-ABU";
    break;
  case '6':
    echo "Warna yang kamu pilih adalah warna HITAM";
    break;
  default:
    echo "Ups! Maaf pilihannya hanya 1 - 6 :)";
    break;
}
?>