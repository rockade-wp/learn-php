<?php 
// sebagai pengganti if statement saat mengecek sebuah data apakah ada atau tidak

$data = [
  "action" => null
];
// tanpa null coalescing
/* if (isset($data["action"])) {
  $action = $data["action"];
} else {
  $action = "nothing";
}
echo $action . PHP_EOL; */

// menggunakan null coalescing (??)
$action = $data["action"] ?? "nothing";
echo $action . PHP_EOL;
?>