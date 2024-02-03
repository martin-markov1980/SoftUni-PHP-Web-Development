<?php

/*
  Problem 7. Last K Numbers Sums Sequence
  Enter two integers n and k. Generate and print the following sequence of n elements:
  · The first element is: 1
  · All other elements = sum of the previous k elements (if less than k are available, sum all of them)
  · Example: n = 9, k = 5 à 120 = 4 + 8 + 16 + 31 + 61

  Example. 
  Input: 6 3
  Output: 1 1 2 4 7 13
  Comments: None  
*/

$n = 8;
$k = 2;

$result = [1];
for ($i = 1; $i < $n; $i++) {
  if ($i <= $k) {
    $result[$i] = array_sum($result);
  } else {
    $result[$i] = array_sum(array_slice($result, -$k));
  }
}

foreach ($result as $value) {
  echo $value . " ";
}