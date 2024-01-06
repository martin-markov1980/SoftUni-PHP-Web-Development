<?php

/*
  Problem 5. Sum of Odd Numbers
  Write a program that prints the next n odd numbers (starting from 1) and on the last row prints the sum of them.
*/

$num = intval(readline("Number from 1 to 100:"));

$counter = 1;
$result = null;
for ($i = 1; $i <= $num; $i++) {
  echo "$counter" . PHP_EOL;
  $result += $counter;
  $counter += 2;
}

echo "Sum: {$result}";
