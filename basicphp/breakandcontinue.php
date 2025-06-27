<?php 
// break 
echo "Ini adalah break" . PHP_EOL;
$i = 1;
while (true) {
  echo "Hello break: ". $i . PHP_EOL;
  $i++;

  if ($i > 5) {
    break;
  }
}

// continue
echo "Ini adalah continue" . PHP_EOL;
for ($i=0; $i <= 20; $i++) { 
  if ($i % 2 == 0) {
    continue;
  }
  echo "Hello continue: " . $i . PHP_EOL;
}
?>