<?php

/*
  5. Sum Arrays
  Write a program that reads two arrays of integers and sums them. 
  When the arrays are not of the same size, duplicate the smaller array a few times
*/

$arrOne = [5, 4, 3];
$arrTwo = [2, 3, 1, 4];

$largestArr = max($arrOne, $arrTwo);
$smallestArr = min($arrOne, $arrTwo);

$smallestArrIndex = 0;
for ($i = 0; $i < count($largestArr); $i++) {
  if ($smallestArrIndex === count($smallestArr)) {
    $smallestArrIndex = 0;
  }
  if (isset($smallestArr[$smallestArrIndex])) {
    echo $largestArr[$i] + $smallestArr[$smallestArrIndex] . " ";
    $smallestArrIndex++;
  }
}
