<?php

/*
  10. Odd Occurrences
  Write a program that extracts from a given sequence of words all 
  elements that present in it odd number of times (case-insensitive).

  Example. 
  Input:  Java C# PHP PHP JAVA C java 
  Output: java, c#, c
*/

$input = explode(" ", "Java C# PHP PHP JAVA C java");

$assocArrResult = [];
foreach ($input as $value) {
  $arrKeyToLower = strtolower($value);
  if (array_key_exists($arrKeyToLower, $assocArrResult)) {
    $assocArrResult[$arrKeyToLower]++;
  } else {
    $assocArrResult[$arrKeyToLower] = 1;
  }
}

$result = null;
foreach ($assocArrResult as $key => $value) {
  if ($value % 2 != 0) {
    $result .=  "{$key}, ";
  }
}

$result = substr($result, 0, strlen($result) - 2);

echo $result;
