<?php

/*
  13. Periodic Table
  You are given an n number of chemical elements. 
  You need to keep track of all elements and at the end print all unique ones.

  Example. 
  Input:  Ce, O, Mo, O, Ce, Ee, Mo 
  Output: Ee
*/

$input = "Ge, Ch, O, Ne, Nb, Mo, Tc, O, Ne";
$inputToArray = explode(", ", $input);

$result = [];
foreach ($inputToArray as $value) {
  if (array_key_exists($value, $result)) {
    $result[$value]++;
  } else {
    $result[$value] = 1;
  }
}

foreach ($result as $key => $value) {
  if ($value === 1) {
    echo $key . " ";
  }
}
