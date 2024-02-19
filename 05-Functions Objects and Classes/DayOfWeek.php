<?php

declare(strict_types=1);

/*
  Problem 2. Day of Week
  Write a function to return the day number by day of week in text.

  Example.
  Input:
    Monday
    Sunday
    Hi

  Output: 25
    1
    7
    Invalid day!

  Comments: None
*/

function dayOfWeek(string $day): string
{
  switch ($day) {
    case "Monday":
      return "1";
    case "Tuesday":
      return "2";
    case "Wednesday":
      return "3";
    case "Thursday":
      return "4";
    case "Friday":
      return "5";
    case "Saturday":
      return "6";
    case "Sunday":
      return "7";
    default:
      return "Invalid day!";
  }
}

echo dayOfWeek("Thursday");
