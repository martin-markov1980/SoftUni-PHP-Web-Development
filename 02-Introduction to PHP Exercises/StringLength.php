<?php

/*
  Problem 9. String Length
  Write a program that reads from the console a string of maximum 20 characters. 
  If the length of the string is less than 20, the rest of the characters should be filled with *. Print the resulting string on the console.
*/

$stringInput = readline("Types a string: ");

$string20Chars = null;
$stringLessThan20Chars = null;

if (strlen($stringInput) >= 20) {
  $string20Chars = substr($stringInput, 0, 20);
  echo $string20Chars;
} else {
  $stringLessThan20Chars = $stringInput . str_repeat("*", 20 - strlen($stringInput));
  echo $stringLessThan20Chars;
}
