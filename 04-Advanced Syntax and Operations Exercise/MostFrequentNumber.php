<?php

/*
  Problem 4. Most Frequent Number
  Write a program that finds the most frequent number in a given sequence of numbers.
  · Numbers will be in the range [0…65535].
  · In case of multiple numbers with the same maximal frequency, print the leftmost of them

  Example. 
  Input:  4 1 1 4 2 3 4 4 1 2 4 9 3
  Output: 4
  Comments: The number 4 is the most frequent (occurs 5 times)  
*/

$input = explode(" ", "7 7 7 0 2 2 2 0 10 10 10");
$inputAssoc = [];

foreach ($input as $value) {
  if (array_key_exists($value, $inputAssoc)) {
    $inputAssoc[$value]++;
  } else {
    $inputAssoc[$value] = 1;
  }
}

arsort($inputAssoc);

echo array_key_first($inputAssoc);
