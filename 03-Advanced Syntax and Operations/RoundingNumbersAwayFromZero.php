<?php

/*
  4. Rounding Numbers Away from Zero
  Write a program to read an array of real numbers (space separated values), 
  round them to the nearest integer in “away from 0” style and print the output as in the examples below.
  Rounding in “away from zero” style means: 
  To round to the nearest integer, e.g. 2.9 -> 3; -1.75 -> -2
*/

$input = "-5.01 1.599 -2.5 1.50 0";
$arrNumbers = explode(" ", $input);

foreach ($arrNumbers as $number) {
  $roundedNumber = round($number);
  echo "{$number} => {$roundedNumber}";
  echo PHP_EOL;
}
