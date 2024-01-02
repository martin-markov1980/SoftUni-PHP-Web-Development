<?php

/*
  7. Find Largest of Three Numbers  
  You are given three numbers from the standard input each on new line. Print on standard output the string “Max: “, followed by the largest number e.g. “Max: 4”.
*/

echo "Num One:" . PHP_EOL;
$numOne = floatval(readline());

echo "Num Two:" . PHP_EOL;
$numTwo = floatval(readline());

echo "Num Three:" . PHP_EOL;
$numThree = floatval(readline());

$result = $numOne;

if ($result < $numTwo) {
  $result = $numTwo;
} 

if ($result < $numThree) {
  $result = $numThree;
} 

echo "Max: {$result}";
