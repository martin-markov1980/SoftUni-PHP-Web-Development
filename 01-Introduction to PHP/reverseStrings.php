<?php

/*
  8. Reverse Strings  
  You will be given series of strings until you receive an “end” command. Write a program that reverses strings and print pair on separate line in format "{word} = {reversed word}".
*/

echo "String:" . PHP_EOL;
$string = readline();

while ($string != "end") {
  $reversedString = strrev($string);
  echo "{$string} = {$reversedString}" . PHP_EOL;

  echo "String:" . PHP_EOL;
  $string = readline();
}

echo "End";
