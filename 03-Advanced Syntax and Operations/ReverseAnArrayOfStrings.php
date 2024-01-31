<?php

/*
  Problem 2. Reverse an Array of Strings
  Write a program to read an array of strings, reverse it and print its elements. 
  The input consists of a sequence of space separated strings. Print the output on a single line (space separated).

  Example. 
  Input:  a b c d e
  Output: e d c b a
          
*/

$input = explode(" ", "a b c d e");

for ($i = 0; $i < intval(count($input) / 2); $i++) {
  $startChar = array_splice($input, $i, 1);
  $lastChar = array_splice($input, count($input) - 1 - $i, 1);
  array_splice($input, $i, 0, $lastChar[0]);
  array_splice($input, count($input) - $i, 0, $startChar[0]);
}

foreach ($input as $value) {
  echo $value . " ";
}
