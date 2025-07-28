<?php
// foreach loop digunakan untuk mengakses perulangan pada data array

// $names = ["ade", "tyas", "syafa", "aya"];
// tidak menggunakan foreach
/* for ($i=0; $i < count($names); $i++) { 
  echo "Data ke $i: $names[$i]" . PHP_EOL;
} */
// menggunakan foreach
/* foreach ($names as $name) {
  echo "Data: $name" . PHP_EOL;
} */

// foreeach dengan key value
$student = [
  "name" => "Ade",
  "hoby" => "Calisthenic",
  "address" => [
    "city" => "Sumbawa",
    "country" => "Indonesia"
  ]
];
foreach ($student as $key => $value) {
  if (is_array($value)) {
    echo "$key: " . PHP_EOL;
    foreach ($value as $subKey => $subValue) {
      echo "$subKey: $subValue" . PHP_EOL;
    }
  } else {
    echo "$key: $value" . PHP_EOL;
  }
}
