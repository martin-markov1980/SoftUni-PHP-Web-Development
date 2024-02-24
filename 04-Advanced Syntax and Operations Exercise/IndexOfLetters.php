<?php

/*
  Problem 1. Index of Letter
  Write a program that creates an array containing all letters from the alphabet (a-z).
  Read a lowercase word from the console and print the index of each of its letters from the letters array.

  Example. 
  Input:  abcz
  Output: 
          a -> 0 
          b -> 1 
          c -> 2 
          z -> 2
*/

// Define an array containing the English alphabet as values
$alphabet = [
  'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j',
  'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't',
  'u', 'v', 'w', 'x', 'y', 'z'
];

$input = strtolower("softuni");

for ($i = 0; $i < strlen($input); $i++) {
  echo $input[$i] . " -> " . array_search($input[$i], $alphabet) . PHP_EOL;
}
