<?php

/*
  Problem 2. Sum Two Numbers
  Write a PHP script SumTwoNumbers.php that declares two variables, firstNumber and secondNumber. 
  They should hold integer or floating-point numbers (hard-coded values). 
  Print their sum in the output in the format shown in the examples below. 
  The numbers should be rounded to the second number after the decimal point. Find in Internet how to round a given number in PHP. Examples:
*/

// $firstNumber + $secondNumber = 2 + 5 = 7.00
$firstNumber = floatval(readline());
$secondNumber = floatval(readline());
$result = $firstNumber + $secondNumber;

echo "\$firstNumber + \$firstNumber = {$firstNumber} + {$secondNumber} = {$result}";
