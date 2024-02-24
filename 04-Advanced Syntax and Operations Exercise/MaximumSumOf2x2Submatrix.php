<?php

/*
  Problem 11. Maximum sum of 2x2 submatrix
  Write a program that read a matrix from console. Then find biggest sum of 2x2 submatrix and print it to console.
  On first line you will get matrix sizes in format rows, columns.
  One next rows lines you will get elements for each column separated with coma
  Print biggest top-left square, which you find and sum of it's elements.

  Example.
  Input:
    3, 6
    7, 1, 3, 3, 2, 1
    1, 3, 9, 8, 5, 6
    4, 6, 7, 9, 1, 0
  
  Output: 25
    9 8
    7 9
    33
  Comments: None
*/

list($rows, $columns) = explode(", ", readline());

$matrix = [];
for ($i = 0; $i < $rows; $i++) {
  $matrix[$i] = explode(", ", readline());
}

$finalCountTotal = PHP_INT_MIN;
$finalArrResult = [];
for ($row = 0; $row < count($matrix) - 1; $row++) {
  for ($col = 0; $col < count($matrix[$row]) - 1; $col++) {
    $currCount = null;
    $currSubMtrx = [
      $matrix[$row][$col], 
      $matrix[$row][$col + 1],
      $matrix[$row + 1][$col],
      $matrix[$row + 1][$col + 1]
    ];
    $currCount = array_sum($currSubMtrx);

    if ($currCount > $finalCountTotal) {
      $finalCountTotal = $currCount;
      $finalArrResult = $currSubMtrx;
    }
    
  }
}

echo $finalArrResult[0] . " " . $finalArrResult[1] . PHP_EOL;
echo $finalArrResult[2] . " " . $finalArrResult[3] . PHP_EOL;
echo $finalCountTotal;
