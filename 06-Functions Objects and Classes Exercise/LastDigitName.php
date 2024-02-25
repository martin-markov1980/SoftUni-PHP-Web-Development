<?php

declare(strict_types=1);

/*
  Problem 9. Last Digit Name
  
  Write a class Number that will hold an integer number. 
  Write a method in the class that returns the English name of the last digit of the given number. 
  Write a program that reads an integer and prints the returned value from this method.

  Example.
  Input:
    1024
    512

  Output: 
    four
    two

  Comments:
    None
*/

class LastDigitName 
{
  private $number;

  public function __construct(string $num)
  {
    $this->number = $num;
  }

  public function getLastDigit(): string
  {
    $lastDigit = $this->number[strlen($this->number) - 1];
    
    switch ($lastDigit) {
      case '0':
        $lastDigit = 'zero';
        break;
      case '1':
        $lastDigit = 'one';
        break;
      case '2':
        $lastDigit = 'two';
        break;
      case '3':
        $lastDigit = 'three';
        break;
      case '4':
        $lastDigit = 'four';
        break;
      case '5':
        $lastDigit = 'five';
        break;
      case '6':
        $lastDigit = 'six';
        break;
      case '7':
        $lastDigit = 'seven';
        break;
      case '8':
        $lastDigit = 'eight';
        break;
      case '9':
        $lastDigit = 'nine';
        break;     
    }

    return $lastDigit;
  }
}

$myNum = new LastDigitName(readline("Number: "));

echo $myNum->getLastDigit();
