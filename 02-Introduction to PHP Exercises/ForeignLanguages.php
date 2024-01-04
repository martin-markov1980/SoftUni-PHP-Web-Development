<?php

/*
  Problem 3. Foreign Languages
  Write a program, which prints the language, that a given country speaks. 
  You can receive only the following combinations:
  English is spoken in England and USA; Spanish is spoken in Spain, Argentina and Mexico; for the others, we should print "unknown".
*/

$country = readline("Country:");

switch ($country) {
  case "England":
  case "USA":
    echo "English";
    break;        
  case "Spain":
  case "Argentina":
  case "Mexico":
    echo "Spanish";
    break;
  default:
    echo "unknown";
    break;
}
