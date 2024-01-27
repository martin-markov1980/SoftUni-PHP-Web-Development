<?php

/*
  7. Find Min and Max Element
  Write program that read a matrix from console and print min and max element:

  Example.
  Input:  
  3, 6
  7, 1, 3, 3, 2, 1
  1, 3, 9, 8, 5, 6
  4, 6, 7, 9, 1, 1
  
  Output: 
  Min: 1 
  Max: 9
*/


$rows = intval((readline("Array matrix rows: ")));
$columns = intval((readline("Array matrix columns: ")));

$matrix = [];

for ($a = 0; $a < $rows; $a++) {
  for ($b = 0; $b < $columns; $b++) {
    $rowPosition = $a + 1;
    $colPosition = $b + 1;
    $columnValue = intval((readline("Enter value for matrix position row-{$rowPosition} column-{$colPosition}: ")));
    $matrix[$a][$b] = $columnValue;
  }
}

$arrMin = PHP_INT_MAX;
$arrMax = PHP_INT_MIN;

foreach ($matrix as $arr) {
  if (min($arr) < $arrMin) {
    $arrMin = min($arr);
  }
  if (max($arr) > $arrMax) {
    $arrMax = max($arr);
  }
}

echo "Min: {$arrMin}";
echo PHP_EOL;
echo "Max: {$arrMax}";
echo PHP_EOL;
