<?php

/*
  Problem 6. Max Sequence of Increasing Elements
  Write a program that finds the longest increasing subsequence in an array of integers. 
  The longest increasing subsequence is a portion of the array (subsequence) that is strongly increasing and has the longest possible length. 
  If several such subsequences exist, find the left most of them

  Example. 
  Input:  3 2 3 4 2 2 4
  Output: 2 3 4
  Comments: None  
*/

$input = explode(" ", "3 2 3 4 2 2 4");

$longestArrSeq = [$input[0]];
$currentArr = [$input[0]];
for ($i = 1; $i < count($input); $i++) {
  if ($input[$i] - $currentArr[count($currentArr) - 1] != 1) {
    $currentArr = [];
    array_push($currentArr, $input[$i]);
  } elseif ($input[$i] - $currentArr[count($currentArr) - 1] == 1) {
    array_push($currentArr, $input[$i]);
  }

  if (count($currentArr) > count($longestArrSeq)) {
    $longestArrSeq = $currentArr;
  }
}

foreach ($longestArrSeq as $value) {
  echo $value . " ";
}