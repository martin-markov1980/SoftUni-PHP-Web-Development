<?php

/*
  Problem 4. Interval of Numbers
  Write a program, which takes two numbers as input and prints the interval of numbers between them, starting from the smaller one and ending with the larger one.
*/

$numOne = floatval(readline("Num One:"));
$numTwo = floatval(readline("Num Two:"));

$startValue = min($numOne, $numTwo);
$endValue = max($numOne, $numTwo);

while ($startValue <= $endValue ) {
  echo $startValue . PHP_EOL;
  $startValue++;
}
