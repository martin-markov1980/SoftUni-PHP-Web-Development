<?php

declare(strict_types=1);

/*
  Problem 1. Cooking by Numbers
  Write a program that receives a number and a list of five operations. 
  Perform the operations in sequence by starting with the input number and using the result of every operation as starting point for the next. 
  Print the result of every operation in order. The operations can be one of the following:
  · chop – divide the number by two
  · dice – square root of number
  · spice – add 1 to number
  · bake – multiply number by 3
  · fillet – subtract 20% from number

  The input comes in 2 lines. On the first line you will receive your starting point and must be parsed to a number. 
  On the second line you will receive 5 commands separated by “, “ each one will be the name of the operation to be performed.

  The output should be printed on the console.

  Example.
  Input:
    32
    chop, chop, chop, chop, chop

  Output: 
    16 
    8 
    4 
    2 
    1

  Comments: None
*/

$num = intval(readline("Num: "));
$commandsArray = explode(", ", readline("Commands: "));

function applyOperation(float $num, string $command): float
{
  switch ($command) {
    case 'chop':
      $num /= 2;
      break;
    case 'dice':
      $num = sqrt($num);
      break;
    case 'spice':
      $num += 1;
      break;
    case 'bake':
      $num *= 3;
      break;
    case 'fillet':
      $num -= $num * 0.2;
      break;
  }

  return $num;
}

foreach ($commandsArray as $command) {
  $num = applyOperation($num, $command);
  echo $num . PHP_EOL;
}
