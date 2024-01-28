<?php

/*
  11. Letter Repetition
  You will be given a single string, containing random ASCII character. 
  Your task is to print every character, and how many times it has been used in the string
*/

$input = "The quick brown fox jumps over the lazy dog";

$assocArrResult = [];
for ($i=0; $i < strlen($input); $i++) {
  $currentChar = $input[$i];
  if (array_key_exists($currentChar, $assocArrResult)) {
    $assocArrResult[$currentChar]++;
  } else {
    $assocArrResult[$currentChar] = 1;
  }
}

foreach ($assocArrResult as $key => $value) {
  echo "{$key} -> {$value}" . PHP_EOL;
}