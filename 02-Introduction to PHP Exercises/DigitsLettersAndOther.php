<?php

/*
  Problem 11. Digits, letters and other
  Write a program that receives a single string and on the first line prints all the digits, on the second 
  – all the letters, and on the third – all the other characters. 
  There will always be at least one digit, one letter and one other characters.
*/

$stringInput = readline("Type a string: ");

$stringAlphaBeta = null;
$stringNumerics = null;
$stringSpecialChars = null;

for ($i = 0; $i < strlen($stringInput); $i++) {
  if (ord($stringInput[$i]) >= 65 && ord($stringInput[$i]) <= 90 || ord($stringInput[$i]) >= 97 && ord($stringInput[$i]) <= 122) {
    $stringAlphaBeta .= $stringInput[$i];
  } else if (is_numeric($stringInput[$i])) {
    $stringNumerics .= $stringInput[$i];
  } else {
    $stringSpecialChars .= $stringInput[$i];
  }
}

echo $stringNumerics . PHP_EOL;
echo $stringAlphaBeta . PHP_EOL;
echo $stringSpecialChars . PHP_EOL;
