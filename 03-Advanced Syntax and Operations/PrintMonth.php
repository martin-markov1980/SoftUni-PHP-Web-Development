<?php

/*
  1. Print Month
  Enter a month number [1…12] and print the month name (in English) or “Invalid Month!”. Use an array of strings
*/

$month = intval(readline("Enter a month number [1…12]: ")) - 1;

$monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

if ($month >= 0 && $month <= 11) {
  echo $monthNames[$month];
} else {
  echo "Invalid Month!";
}
