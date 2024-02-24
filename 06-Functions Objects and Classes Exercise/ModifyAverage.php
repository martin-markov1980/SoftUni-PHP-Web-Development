<?php

declare(strict_types=1);

/*
  Problem 2. Modify Average
  
  Write a program that modifies a number until the average value of all of its digits is higher than 5. 
  In order to modify the number, your program should append a 9 to the end of the number, when the average value of all of its digits is higher than 5 the program should stop appending. 
  If the number’s average value of all of its digits is already higher than 5, no appending should be done.

  The input is a single number received as a string.
  The output should consist of a single number - the final modified number which has an average value of all of its digits higher than 5. 
  The output should be printed on the console.

  The input comes in 2 lines. On the first line you will receive your starting point and must be parsed to a number. 
  On the second line you will receive 5 commands separated by “, “ each one will be the name of the operation to be performed.

  The output should be printed on the console.

  Example.
  Input:
    101
    5835

  Output: 
    1019999
    5835

  Comments:
    · The input number will consist of no more than 6 digits.
    · The input will be a valid number (there will be no leading zeroes).
*/

$inputToArray = str_split(readline("Number: "));

while (array_sum($inputToArray) / count($inputToArray) <= 5) {
  $inputToArray[] = 9;
}

echo implode($inputToArray);
