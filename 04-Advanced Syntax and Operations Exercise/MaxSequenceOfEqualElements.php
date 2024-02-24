<?php

/*
  Problem 5. Max Sequence of Equal Elements
  Write a program that finds the longest sequence of equal elements in an array of integers. 
  If several longest sequences exist, print the leftmost one.

  Example. 
  Input:  2 1 1 2 3 3 2 2 2 1
  Output: 2 2 2
  Comments: None  
*/

$input = explode(" ", "2 1 1 2 3 3 2 2 2 1");

$longestArrSeq = [$input[0]];
$currentArr = [$input[0]];
for ($i = 1; $i < count($input); $i++) {
  if ($currentArr[0] != $input[$i]) {
    $currentArr = [];
    array_push($currentArr, $input[$i]);
  } else {
    array_push($currentArr, $input[$i]);
  }

  if (count($currentArr) > count($longestArrSeq)) {
    $longestArrSeq = $currentArr;
  }
}

foreach ($longestArrSeq as $value) {
  echo $value . " ";
}
