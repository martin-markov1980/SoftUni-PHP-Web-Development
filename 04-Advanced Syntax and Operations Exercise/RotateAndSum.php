<?php

/*
  Problem 8. Rotate and Sum
  To “rotate an array on the right” means to move its last element first: {1, 2, 3} à {3, 1, 2}
  Write a program to read an array of n integers (space separated on a single line) and an integer k, 
  rotate the array right k times and sum the obtained arrays after each rotation as shown below.

  Example. 
  Input: 
  3 2 4 -1
  2

  Output: 3 2 5 6
  Comments: 
  rotated1[] = -1 3 2 4
  rotated2[] = 4 -1 3 2
  sum[] = 3 2 5 6 
*/

$input = explode(" ", "1 2 3 4 5");
$rotationCount = 3;

$resultMatrix = [];
for ($i = 0; $i < $rotationCount; $i++) {
  array_unshift($input, array_pop($input));
  $resultMatrix[$i] = $input;
}

$result = array_fill(0, count($resultMatrix[0]), null);
for ($row = 0; $row < count($resultMatrix); $row++) {
  for ($col = 0; $col < count($resultMatrix[$row]); $col++) {
    $result[$col] += $resultMatrix[$row][$col];
  }
}

foreach ($result as $value) {
  echo $value . " ";
}
