<?php

/*
  12. Sum by Town
  Read Towns and Incomes (Like Shown Below) and Print an Array Holding the Total Income for Each Town (See Below). 
  Print the Towns in Their Natural Order As Object Properties.

  Example. 
  Input:  Sofia, 20, Varna, 10, Sofia, 5 
  Output: 
          Sofia => 25 
          Varna => 10
*/


$input = "Plovdiv, 40, Pernik, 20, Vidin, 8, Sliven, 44, Plovdiv, 1, Vidin, 7, Chirpan, 0";
$inputToArr = explode(", ", $input);

$result = [];
for ($i = 0; $i < count($inputToArr) - 1; $i++) {
  if (!is_numeric($inputToArr[$i]) && !array_key_exists($inputToArr[$i], $result)) {
    $result[$inputToArr[$i]] = $inputToArr[$i + 1];
  } elseif (!is_numeric($inputToArr[$i]) && array_key_exists($inputToArr[$i], $result)) {
    $result[$inputToArr[$i]] += $inputToArr[$i + 1];
  }
  
}

foreach ($result as $key => $value) {
  echo "{$key} => {$value}" . PHP_EOL;
}
