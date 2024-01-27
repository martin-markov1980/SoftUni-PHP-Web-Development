<?php

/*
  9. Count Real Numbers
  Read a list of real numbers and print them in ascending order along with their number of occurrences.

  Example. 
  Input:  8 2.5 2.5 8 2.5 
  Output: 2.5 -> 3 
          8 -> 2
*/

$input = explode(" ", "8 2.5 2.5 8 2.5");

$result = [];

foreach ($input as $value) {
  if (array_key_exists($value, $result)) {
    $result[$value]++;
  } else {
    $result[$value] = 1;
  }
}

ksort($result);

foreach ($result as $key => $value) {
  echo "{$key} -> {$value}" . PHP_EOL;
}