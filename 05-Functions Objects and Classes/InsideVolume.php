<?php

declare(strict_types=1);

/*
  Problem 3. Inside Volume
  Write a function that determines whether a point is inside the volume, defined by the box, shown on the right.
  The input comes as a string representing the coordinates that needs to be split and parsed as numbers. 
  Each set of 3 elements are the x, y and z coordinates of a point.
  The output should be printed to the console on a new line for each point. 
  Print inside if the point lies inside the volume and outside otherwise.

  Example.
  Input:
    8, 20, 22,
    13.1, 50, 31.5, 
    50, 80, 50,
    -5, 18, 43

  Output: 25
    outside
    inside
    inside
    outside

  Comments: None
*/

$input = "8, 20, 22, 13.1, 50, 31.5, 50, 80, 50, -5, 18, 43";

function insideVolume($x, $y, $z): string
{
  $x1 = 10;
  $x2 = 50;
  $y1 = 20;
  $y2 = 80;
  $z1 = 15;
  $z2 = 50;

  $isInX = $x >= $x1 && $x <= $x2 ? true : false;
  $isInY = $y >= $y1 && $y <= $y2 ? true : false;
  $isInZ = $z >= $z1 && $z <= $z2 ? true : false;

  if ($isInX && $isInY && $isInZ) {
    return "inside";
  } else {
    return "outside";
  }
}

$inputToArr = explode(", ", $input);

for ($i = 0; $i < count($inputToArr); $i += 3) {
  $x = $inputToArr[$i];
  $y = $inputToArr[$i + 1];
  $z = $inputToArr[$i + 2];
  echo insideVolume($x, $y, $z);
  echo PHP_EOL;
}
