<?php

/*
    4. Alphabet
    Create a program that print all small letters from the alphabet.
*/

function smallLettersPrint()
{
  $start = ord("a");
  $end = ord("z");

  for ($i = $start; $i <= $end; $i++) {
    echo chr($i) . " ";
  }
}

smallLettersPrint();
