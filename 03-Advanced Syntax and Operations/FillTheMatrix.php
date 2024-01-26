<?php

/*
  6. Fill the Matrix
  Filling a matrix in the regular way (top to bottom and left to right) is boring. 
  Write code that fill a matrix of size N x N in two different patterns. Both patterns are described below

  Example. 
  Input:  3, A 
  Output: 1 4 7 
          2 5 8 
          3 6 9

  Input:  3, B 
  Output: 1 6 7 
          2 5 8 
          3 4 9
*/
echo "3, A pattern below:";
echo PHP_EOL;

$arrInput = "3, A";
$matrixAResult = [];
list($matrixSize, $arrPattern) = explode(", ", $arrInput);

$matrixARowSize = $matrixSize;
$matrixAColSize = $matrixSize;
$colValue = 1;

for ($row = 0; $row < $matrixARowSize; $row++) {
  for ($col = 0; $col < $matrixAColSize; $col++) {
    $matrixAResult[$row][$col] = $colValue;
    $colValue += $matrixSize;
  }
  $colValue = $row + 2;
}

foreach($matrixAResult as $arr) {
  foreach($arr as $val) {
    echo "{$val} ";
  }
  echo PHP_EOL;
}


echo PHP_EOL;
echo "3, B pattern below:";
echo PHP_EOL;

$arrInput = "3, B";
$matrixBResult = [];
list($matrixSize, $arrPattern) = explode(", ", $arrInput);

$matrixBColSize = $matrixSize;
$matrixBRowSize = $matrixSize;
$rowValue = 1;


for ($col = 0; $col < $matrixBColSize; $col++) {
  if ($col === 0) {
    for ($row = 0; $row < $matrixBRowSize; $row++) {
      $matrixBResult[$row][$col] = $rowValue;
      $rowValue++;
    }
  } elseif ($col % 2 === 1) {
    for ($row = $matrixBRowSize - 1; $row >= 0; $row--) {
      $matrixBResult[$row][$col] = $rowValue;
      $rowValue++;
    }
  } elseif($col % 2 === 0) {
    for ($row = 0; $row < $matrixBRowSize; $row++) {
      $matrixBResult[$row][$col] = $rowValue;
      $rowValue++;
    }
  }
}

foreach($matrixBResult as $arr) {
  foreach($arr as $val) {
    echo "{$val} ";
  }
  echo PHP_EOL;
}
