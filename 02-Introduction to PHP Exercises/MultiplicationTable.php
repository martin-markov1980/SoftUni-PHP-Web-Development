<?php

/*
  Problem 6. Multiplication Table
  You will receive an integer as an input from the console. 
  Print the 10 times table for this integer. See the examples below for more information.
*/

$num = intval(readline("Please enter integer:"));
$multiplier = 1;

while ($multiplier <= 10) {
  $currentResult = $num * $multiplier;
  echo "$num X $multiplier = $currentResult" . PHP_EOL;
  $multiplier++;
}
