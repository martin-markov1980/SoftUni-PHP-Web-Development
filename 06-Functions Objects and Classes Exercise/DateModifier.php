<?php

declare(strict_types=1);

/*
  Problem 20. Date Modifier
  
  Create a class DateModifier which stores the difference of the days between two Dates. 
  It should have a method which takes two String parameters representing a date as 
  Strings and calculates the difference in the days between them.


  Example.

  Input:
    1992 05 31
    2016 06 17

    2016 05 31
    2016 04 19

  Output: 
    8783

    42

  Comments:
    None
*/

class DateModifier
{
  private $dateOne;
  private $dateTwo;

  public function __construct(string $dateOne, string $dateTwo)
  {
    $this->dateOne = $dateOne;
    $this->dateTwo = $dateTwo;
  }

  public function getDaysDifferences(): int
  {
    $dateOne = DateTime::createFromFormat('Y m d', $this->dateOne);
    $dateTwo = DateTime::createFromFormat('Y m d', $this->dateTwo);
    $diff = $dateOne->diff($dateTwo);

    return intval($diff->format('%a'));
  }
}

$dateModifierOne = new DateModifier("1992 05 31", "2016 06 17");
$dateModifierTwo = new DateModifier("2016 05 31", "2016 04 19");

echo $dateModifierOne->getDaysDifferences(); // 8783
echo PHP_EOL;
echo $dateModifierTwo->getDaysDifferences(); // 42
