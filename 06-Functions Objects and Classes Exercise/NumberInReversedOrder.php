<?php

declare(strict_types=1);

/*
  Problem 9. Last Digit Name
  
  Write a class DecimalNumber that has a method that prints all its digits in reversed order.

  Example.
  Input:
    256
    1.12

  Output: 
    652
    21.1

  Comments:
    None
*/

class DecimalNumber
{
  private $floatNumber;

  public function __construct(float $num)
  {
    $this->floatNumber = $num;
  }

  public function reverseNum(): string
  {
    $this->floatNumber = strval($this->floatNumber);
    // shorter way of doing it
    // return strrev($this->floatNumber);

    // long way of doing it
    $reversedString = [];
    for ($i = strlen($this->floatNumber) - 1; $i >= 0; $i--) {
      $reversedString[] = $this->floatNumber[$i];
    }

    return implode($reversedString);
  }
}

$myNum = new DecimalNumber(23.69);

echo $myNum->reverseNum(); // 96.32
