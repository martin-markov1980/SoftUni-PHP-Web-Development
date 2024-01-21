<?php

/*
  2. Reverse an Array of Integers
  Write a program to read an array of integers, reverse it and print its elements. 
  The input consists of a number n (the number of elements) + n integers, each as a separate line. 
  Print the output on a single line (space separated).
*/

$arrayInput = [4, -1, 20, 99, 5];
$arrayElementsCount = array_splice($arrayInput, 0, 1);
$arrayReversed = array_reverse($arrayInput);

foreach($arrayReversed as $element) {
  echo "{$element} ";
}
