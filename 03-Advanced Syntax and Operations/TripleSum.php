<?php

/*
  3. Triple Sum
  Write a program to read an array of integers and find all triples of elements a, b and c, 
  such that a + b == c (where a stays to the left from b). Print “No” if no such triples exist.
  Example. 
  Input: [4, 2, 8, 6] 
  Output: 4 + 2 == 6
          2 + 6 == 8
*/

// Въртим цикъл през всички числа
// Вземаме числото на моментната позиция и го събираме със следващото
// Проверяваме дали сбора им е равен на всяко друго число от масива включително числото на моментната позиция
// Печатаме резултата

$inputArray = [2, 7, 5, 0];
$hasTripleSum = false;

for ($a = 0; $a < count($inputArray); $a++) {
  $currentNumber = $inputArray[$a];
  for ($b = $a + 1; $b < count($inputArray); $b++) {
    $nextNumber = $inputArray[$b];
    $result = $currentNumber + $nextNumber;
    if (in_array($result, $inputArray)) {
      $hasTripleSum = true;
      echo "{$currentNumber} + {$nextNumber} == {$result}";
      echo PHP_EOL;
    }
  }
}

if (!$hasTripleSum) {
  echo "No";
}
