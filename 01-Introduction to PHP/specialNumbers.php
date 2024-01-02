<?php

/*
  9. Special Numbers  
  A number is special when its sum of digits is 5, 7 or 11.
  Write a program to read an integer n and for all numbers in the range 1…n to print the number and if it is special or not (True / False).
*/

echo "Number:" . PHP_EOL;
$num = intval(readline());

$result = null;

for ($i = 1; $i <= $num; $i++) {
  $currentNumber = $i;
  while ($currentNumber > 0) {
    $result += $currentNumber % 10;
    $currentNumber = intval($currentNumber / 10);
  }
  
  $currentNumber = $i;
  if ($result === 5 || $result === 7 || $result === 11) {
    echo "{$currentNumber} -> True" . PHP_EOL;
  } else {
    echo "{$currentNumber} -> False" . PHP_EOL;
  }

  $result = null;
}
