<?php

/*
  Problem 10. Sum Matrix Elements
  Write program that read a matrix from console and print:
  · Count of rows
  · Count of columns
  · Sum of all matrix’s elements
  On first line you will get matrix sizes in format [rows, columns]

  Example.
  Input:
    3, 6
    7, 1, 3, 3, 2, 1
    1, 3, 9, 8, 5, 6
    4, 6, 7, 9, 1, 0
  
  Output: 25
    3
    6
    76
  Comments: None
*/

list($rows, $columns) = explode(", ", readline());

$matrix = [];

for ($i = 0; $i < $rows; $i++) {
  $matrix[$i] = explode(", ", readline());
}

$sum = null;

foreach ($matrix as $value) {
  $sum += array_sum($value);
}

echo $rows . "\n" . $columns . "\n" . $sum;
