<?php

declare(strict_types=1);

/*
  Problem 1. Symmetry Check
  Write a function isPalindrome to check a string for symmetry.

  Example.
  Input:
    abcccba
    xyz

  Output: 25
    true
    false

  Comments: None
*/

function isPalindrome(string $word): bool
{
  $isPalindrome = true;
  for ($i = 0; $i < strlen($word); $i++) {
    if ($word[$i] != $word[strlen($word) - 1 - $i]) {
      $isPalindrome = false;
      break;
    }
  }

  return $isPalindrome;
}

var_dump(isPalindrome("abcccba")); // true
var_dump(isPalindrome("xyz")); // false
