<?php

/*
    6. Calculate Two Numbers
    You will first start using PHP in CLI mode (console application). This means you will receive user input through the standard input and will return result into the standard output.
    PHP, like most of the modern languages, supports argument passing on application start as well as waiting for user input.
    You are given two numbers from the standard input each on new line and the next line you are given the command. The commands will be sum, subtract, divide and multiply. If you have other command you should print - Wrong operation supplied.
*/

echo "Num One:" . PHP_EOL;
$numOne = floatval(readline());

echo "Num Two:" . PHP_EOL;
$numTwo = floatval(readline());

echo "Operation +, -, *, /:" . PHP_EOL;
$operation = readline();

function calculateTwoNumbers($numOne, $numTwo, $operation)
{
  $result = null;
  switch ($operation) {
    case "+":
      $result = $numOne + $numTwo;
      break;
    case "-":
      $result = $numOne - $numTwo;
      break; 
    case "*":
      $result = $numOne * $numTwo;
      break;
    case "/":
      $numTwo != "0" ? $result = $numOne / $numTwo : $result = "Cannot divide by zero";
      break;
    default:
      $result = "Wrong operation supplied.";
      break;
  }
  
  echo $result;
}

calculateTwoNumbers($numOne, $numTwo, $operation);
