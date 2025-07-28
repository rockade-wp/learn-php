<?php
$nilai = 100;
$presensi = 14;

if ($nilai > 100 || $presensi > 16) {
  echo "Ups! Nilai / presensi yang diinput tidak valid.";
} elseif ($nilai >= 90 && $presensi >= 14) {
  echo "Impresive, anda lulus dengan sangat baik.";
} elseif ($nilai >= 75 && $presensi >= 10) {
  echo "Selamat, anda lulus dengan baik.";
} else {
  echo "Maaf, silakan mencoba kembali tahun depan. SEMANGATTT!";
}
