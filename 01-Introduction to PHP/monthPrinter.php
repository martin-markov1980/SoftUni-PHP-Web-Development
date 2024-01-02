<?php

/*
    5. Month Printer
    Write a program, which takes an integer from the console and prints the corresponding month. If the number is more than 12 or less than 1 print "Error!".
*/

echo "Input:" . PHP_EOL;
$input = intval(readline());

printMonth($input);

function printMonth($int)
{
  switch ($int) {
    case 1:
      echo "Jan";
      break;
    case 2:
      echo "Feb";
      break;
    case 3:
      echo "Mar";
    break;
    case 4:
      echo "Apr";
      break;
    case 5:
      echo "May";
      break;
    case 6:
      echo "Jun";
    break;
    case 7:
      echo "Jul";
      break;
    case 8:
      echo "Aug";
      break;
    case 9:
      echo "Sep";
    break;
    case 10:
      echo "Oct";
      break;
    case 11:
      echo "Nov";
      break;
    case 12:
      echo "Dec";
    break;
    default:
      echo "Error!";
      break;
  }
}
