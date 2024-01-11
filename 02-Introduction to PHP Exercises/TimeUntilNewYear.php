<?php

/*
  Write a PHP script TimeUntilNewYear.php. Use the built-in function getdate() to get the current date and time. 
  Print how many hours, minutes and seconds are left until New Year and how many days, hours, minutes and seconds are left in a counter format . 
  Look at examples below to get a better idea. The examples show the current date and time in "d-m-Y G:i:s" format. 
  Use the current time. Check for date/time formats in PHP. (Note: Keep the Spring/Autumn time shifts in mind in your calculations.)
*/
date_default_timezone_set('Europe/London');

$newYearDate = "2025-1-1"; 
$timeStampForNewYear = strtotime($newYearDate);

$currentTimestamp = time();

$secondsUntilNewYear = $timeStampForNewYear - $currentTimestamp;
$minutesUntilNewYear = intval($secondsUntilNewYear / 60);
$hoursUntilNewYear = intval($minutesUntilNewYear / 60);
$daysUntilNewYear = intval($hoursUntilNewYear / 24);

$formattedDaysUntilNewYear = intval($daysUntilNewYear);
$formattedHoursUntilNewYear = $hoursUntilNewYear - $daysUntilNewYear * 24;
$formattedMinutesUntilNewYear = $minutesUntilNewYear - $hoursUntilNewYear * 60;
$formattedSecondsUntilNewYear = $secondsUntilNewYear - $minutesUntilNewYear * 60;

echo "Hours until new year : {$hoursUntilNewYear}" . PHP_EOL;
echo "Minutes until new year : {$minutesUntilNewYear}" . PHP_EOL;
echo "Seconds until new year : {$secondsUntilNewYear}" . PHP_EOL;
echo "Days:Hours:Minutes:Seconds {$formattedDaysUntilNewYear}:{$formattedHoursUntilNewYear}:{$formattedMinutesUntilNewYear}:{$formattedSecondsUntilNewYear}";
