<?php

/*
  Problem 12. Maximal Sum
  Write a program, which reads a rectangular matrix of integers of size of r rows by c columns. 
  Find in the matrix a platform of size 3 x 3 with a maximal sum

  Example.
  Input:
    4 4
    5 6 2 8
    3 1 9 5
    8 1 6 9
    1 5 3 4
  
  Output: 25
    Sum = 47
    6 2 8 
    1 9 5
    1 6 9
  Comments: None
*/

list($rows, $columns) = explode(" ", readline());

$matrix = [];
for ($i = 0; $i < $rows; $i++) {
  $matrix[$i] = explode(" ", readline());
}

$finalCountTotal = PHP_INT_MIN;
$finalArrResult = [];
for ($row = 0; $row < count($matrix) - 2; $row++) {
  for ($col = 0; $col < count($matrix[$row]) - 2; $col++) {
    $currCount = null;
    $currSubMtrx = [
      $matrix[$row][$col], 
      $matrix[$row][$col + 1],
      $matrix[$row][$col + 2],
      $matrix[$row + 1][$col],
      $matrix[$row + 1][$col + 1],
      $matrix[$row + 1][$col + 2],
      $matrix[$row + 2][$col],
      $matrix[$row + 2][$col + 1],
      $matrix[$row + 2][$col + 2]
    ];
    $currCount = array_sum($currSubMtrx);

    if ($currCount > $finalCountTotal) {
      $finalCountTotal = $currCount;
      $finalArrResult = $currSubMtrx;
    }
    
  }
}

echo "Sum = {$finalCountTotal}" . PHP_EOL;
echo $finalArrResult[0] . " " . $finalArrResult[1] . " " . $finalArrResult[2] . PHP_EOL;
echo $finalArrResult[3] . " " . $finalArrResult[4] . " " . $finalArrResult[5] . PHP_EOL;
echo $finalArrResult[6] . " " . $finalArrResult[7] . " " . $finalArrResult[8] . PHP_EOL;
