<?php

/*
  Problem 7. Multiplication Table 2.0
  Rewrite you program so it can receive the multiplier from the console. 
  Print the table from the given multiplier to 10. 
  If the given multiplier is more than 10 - print only one row with the integer, the given multiplier and the product. See the examples below for more information.
*/

$num = intval(readline("Please enter integer:"));
$multiplier = intval(readline("Please enter multiplier:"));

if ($multiplier > 10) {
  $result = $num * $multiplier;
  echo "$num X $multiplier = $result";
}

while ($multiplier <= 10) {
  $currentResult = $num * $multiplier;
  echo "$num X $multiplier = $currentResult" . PHP_EOL;
  $multiplier++;
}
