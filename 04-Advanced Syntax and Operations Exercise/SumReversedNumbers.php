<?php

/*
  Problem 3. Sum Reversed Numbers
  To “rotate an array on the right” means to move its last element first: {1, 2, 3} à {3, 1, 2} 
  Write a program to read an array of n integers (space separated on a single line) 
  and sum the obtained arrays after each rotation as shown below.

  Example. 
  Input:  123 234 12
  Output: 774
  Comments: 321 + 432 + 21 = 774  
*/

$input = explode(" ", "123 234 12");

function revString($string) {
  return  strrev($string);
}

function sum($carry, $current) {
  return $carry + $current;
}

$result = array_reduce(array_map("revString", $input), "sum");

print_r($result);

