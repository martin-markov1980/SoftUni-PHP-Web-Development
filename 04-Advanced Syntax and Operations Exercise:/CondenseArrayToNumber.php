<?php

/*
  Problem 9. Condense Array to Number
  Write a program to read an array of integers and condense them by summing adjacent couples of elements until 
  a single integer is obtained. For example, if we have 3 elements {2, 10, 3}, 
  we sum the first two and the second two elements and obtain {2+10, 10+3} = {12, 13}, 
  then we sum again all adjacent elements and obtain {12+13} = {25}.

  Example. 
  Input: 2 10 3
  Output: 25
  Comments: 2 10 3 -> 2+10 10+3 -> 12 13 -> 12 + 13 -> 25
*/

$input = explode(" ", "2 10 3");

$condense = [];
for ($a = 0; $a < count($input); $a++) {
  for ($b = 0; $b < count($input) - 1; $b++) {
    $condense[$b] = $input[$b] + $input[$b + 1];
  }
  $input = $condense;
}

$condense = $condense[0];

print_r($condense);
