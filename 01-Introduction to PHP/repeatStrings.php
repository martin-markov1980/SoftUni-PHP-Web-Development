<?php

/*
  10. *Repeat strings 
  Write a program that reads an array of strings. Each string is repeated n times, where n is the length of the string. Print the concatenated string.
*/

function repeatStrings($arrOfStrings)
{
  $result = null;

  for ($i = 0; $i < count($arrOfStrings); $i++) {
    $currentString = $arrOfStrings[$i];
    $result .= str_repeat($currentString, strlen($currentString));
  }

  echo $result;
}

repeatStrings(["m", "vav", "za"]);
