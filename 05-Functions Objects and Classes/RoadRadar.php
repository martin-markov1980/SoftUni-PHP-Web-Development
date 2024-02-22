<?php

declare(strict_types=1);

/*
  Problem 4. Road Radar
  Write a function that determines whether a driver is within the speed limit. 
  You will receive his speed and the area where he’s driving. 
  Each area has a different limit: on the motorway the limit is 130 km/h, 
  on the interstate the limit is 90, inside a city the limit is 50 and 
  within a residential area the limit is 20 km/h. 
  If the driver is within the limits, your function prints nothing. 
  If he’s over the limit however, your function prints the severity of the infraction. 
  For speeds up to 20 km/h over the limit, he’s speeding; for speeds up to 40 over the limit, 
  the infraction is excessive speeding and for anything else, reckless driving.

  The input comes in two rows. On the first row you will receive the current speed as a string and needs to be parsed as a number. 
  On the second row you will be given the second element which is the area.

  The output should be printed to the console. Note in certain cases there will be no output.

  Example.
  Input:
    40
    city
    20
    residential
    120
    interstate
    200
    motorway
    50
    city

  Output: 
    speeding
    excessive speeding
    reckless driving
    speeding

  Comments: None
*/

function speedLimit(string $zone) : int {
  $zoneLimits = [
    "motorway" => 130,
    "interstate" => 90,
    "city" => 50,
    "residential" => 20
  ];

  return $zoneLimits[$zone];
}

function roadRadar(string $carSpeed, string $zone) : void {
  $speedDifference = intval($carSpeed) - speedLimit($zone);
  if ($speedDifference >= 0 && $speedDifference <= 20) {
    echo "speeding" . PHP_EOL;
  } elseif ($speedDifference > 20 && $speedDifference <= 40) {
    echo "excessive speeding" . PHP_EOL;
  } elseif ($speedDifference > 40) {
    echo "reckless driving" . PHP_EOL;
  } 
}

roadRadar("40", "city"); //
roadRadar("20", "residential"); // speeding
roadRadar("120", "interstate"); // excessive speeding
roadRadar("200", "motorway"); // reckless driving
roadRadar("50", "city"); // speeding

