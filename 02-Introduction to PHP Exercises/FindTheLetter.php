<?php

/*
  Problem 10. Find the Letter
  Write a program, which receives a string and prints the index of a given letter in the string. 
  The tricky part is that you will have to find not the first letter, but the nth letter.

  · On the first line, you will receive the string you are going to search through.
  · On the second line, you will receive an array with exactly two elements:
    o The first element will be the letter, which you have to search for.
    o The second element will be an integer N, showing us which occurrence of the letter we are searching for.

  Example: If we receive the string “Programming is awesome!” and on the next line we receive the array “m 3”. 
  We should find the third occurrence of the letter ‘m’. It can be found on 20th index.
*/

function findTheLetter($searchableString, $arr) {
  $letter = $arr[0];
  $occurrence = $arr[1];
  $counter = null;
  
  for ($i = 0; $i < strlen($searchableString); $i++) {
    if ($searchableString[$i] === $letter) {
      $counter++;
    }

    if ($counter === $occurrence) {
      echo $i . PHP_EOL;
      return;
    }

  }
  
  echo "Find the letter yourself" . PHP_EOL;
}

findTheLetter("Programming is awesome!", ["m", 3]);
findTheLetter("Strings, strings everywhere...", ["e", 5]);
