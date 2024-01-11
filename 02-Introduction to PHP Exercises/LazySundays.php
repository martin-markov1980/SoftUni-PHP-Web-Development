<?php

/*
  Problem 13. *Lazy Sundays
  Write a PHP script LazySundays.php which prints the dates of all Sundays in the current month. Example:
*/

// $month = readline("Please enter month name in the text format ex: 'January, February': ");

$month = "February";
$year = 2024;

switch ($month) {
  case "January":
    $month = 1;
    break;
  case "February":
    $month = 2;
    break;
  case "March":
    $month = 3;
    break;
  case "April":
    $month = 4;
    break;  
  case "May":
    $month = 5;
    break;
  case "June":
    $month = 6;
    break;
  case "July":
    $month = 7;
    break;
  case "August":
    $month = 8;
    break;
  case "September":
    $month = 9;
    break;
  case "October":
    $month = 10;
    break;
  case "November":
    $month = 11;
    break;
  case "December":
    $month = 12;
    break;           
  default:
    echo "Invalid Input!";
    break;
}

$daysInMonth = cal_days_in_month(CAL_GREGORIAN, "$month", 2024); // 31

for ($i=1; $i < $daysInMonth; $i++) {
  $currentDay = $i;
  if (getDayOfWeek($currentDay, $month, $year) === "Sunday") {
    echo "{$currentDay}rd {$month}, {$year}" . PHP_EOL;
  }
}

function getDayOfWeek($day, $month, $year) {
    $dateString = $year . '-' . $month . '-' . $day;
    $dateTime = new DateTime($dateString);
    $dayOfWeek = $dateTime->format('l'); // 'l' returns the full day name

    return $dayOfWeek;
}
