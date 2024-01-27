<?php

/*
  8. Diagonal Difference
  Write a program that finds the difference between 
  the sums of the square matrix diagonals (absolute value).
*/

$squareMatrix = [
  [5, 3, 8],
  [3, 2, 1],
  [9, 4, 2]
];

$leftDiagonal = null;
$rightDiagonal = null;

for ($row=0; $row < count($squareMatrix); $row++) { 
  $leftDiagonal += $squareMatrix[$row][$row];
  $rightDiagonal += $squareMatrix[$row][count($squareMatrix) - $row - 1];
}

echo abs($leftDiagonal - $rightDiagonal);
