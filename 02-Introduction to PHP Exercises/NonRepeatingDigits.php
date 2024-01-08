<?php

/*
  Problem 12. *Non-Repeating Digits
  Write a PHP script NonRepeatingDigits.php that declares an integer variable N, and then finds all 3-digit numbers that are less or equal than N (<= N) and consist of unique digits. 
  Print "no" if no such numbers exist. Examples:
*/

$num = intval(readline("Enter number: "));

if ($num < 102) {
  echo "no";
} else {
  for ($i = 102; $i <= 987; $i++) {
    $curNumToString = strval($i);
    if ($curNumToString[0] === $curNumToString[1] || $curNumToString[0] === $curNumToString[2] || $curNumToString[1] === $curNumToString[2]) {
      continue;
    } elseif ($i === $num) {
      echo "{$i} ";
      return;
    } else {
      echo "{$i}, ";
    }
  }
}
