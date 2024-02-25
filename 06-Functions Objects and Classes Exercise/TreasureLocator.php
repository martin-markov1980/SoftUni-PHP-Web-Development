<?php

declare(strict_types=1);

/*
  Problem 4. Treasure Locator
  
  You will be given a series of coordinates, leading to a buried treasure. 
  Use the map to the right to write a program that locates on which island it is. 
  After you find where all the treasure chests are, compose a list and print it on the console. 
  If a chest is not on any of the islands, print “On the bottom of the ocean” to 
  inform your treasure-hunting team to bring diving gear. 
  If the location is on the shore (border) of the island, it’s still considered to lie inside.

  The input comes as a string of variable number of elements separated by “, “ 
  that must be parsed to numbers. Each pair is the coordinates to a buried treasure chest.

  The output is a list of the locations of every treasure chest, either the name of an island or 
  “On the bottom of the ocean”, printed on the console.

  Example.
  Input:
    4, 2, 1.5, 6.5, 1, 3
    6, 4

  Output: 
    On the bottom of the ocean 
    Tonga 
    Tuvalu
    Samoa

  Comments:
    None
*/

$inputArray = explode(", ", readline("Coordinates: "));

function landTreasureLocator(float $x, float $y): string
{
  $isTokelau = ($x >= 8 && $x <= 9) && ($y >= 0 && $y <= 1);
  $isTuvalu = ($x >= 1 && $x <= 3) && ($y >= 1 && $y <= 3);
  $isSamoa = ($x >= 5 && $x <= 7) && ($y >= 3 && $y <= 6);
  $isTonga = ($x >= 0 && $x <= 2) && ($y >= 6 && $y <= 8);
  $isCook = ($x >= 4 && $x <= 9) && ($y >= 7 && $y <= 8);

  if ($isTokelau) {
    return "Tokelau";
  } elseif ($isTuvalu) {
    return "Tuvalu";
  } elseif ($isSamoa) {
    return "Samoa";
  } elseif ($isTonga) {
    return "Tonga";
  } elseif ($isCook) {
    return "Cook";
  } else {
    return "On the bottom of the ocean";
  }
}
// 4, 2, 1.5, 6.5, 1, 3
for ($i = 0; $i < count($inputArray); $i += 2) {
  $x = floatval($inputArray[$i]);
  $y = floatval($inputArray[$i + 1]);

  echo landTreasureLocator($x, $y);
  echo PHP_EOL;
}
