<?php 

/*
  Problem 15. Mixed Phones
  You will be given several phone entries, in the form of strings in format:
    firstElement : secondElement
  
  The first element is usually the person’s name, and the second one – his phone number. 
  The phone number consists ONLY of digits, while the person’s name can consist of any ASCII characters.
  Sometimes the phone operator gets distracted by the Minesweeper she plays all day, 
  and gives you first the phone, and then the name. e.g. :
  0888888888 : Pesho. You must store them correctly, even in those cases.

  When you receive the command “Over”, 
  you are to print all names you’ve stored with their phones. The names must be printed in alphabetical order.

  Example.
  Input:
    14284124 : Alex
    Gosho : 088423123
    Ivan : 412048192
    123123123 : Nanyo
    Pesho : 150925812
    Over

  Output: 25
    Alex -> 14284124 
    Gosho -> 88423123 
    Ivan -> 412048192 
    Nanyo -> 123123123 
    Pesho -> 150925812

  Comments: None
*/

// Get the input while is not "Over" and split it
// Check if value is numeric and assigned accordingly

$command = null;
$name = null;
$phone = null;
$phonebook = [];
do {
  $input = explode(" : ", readline("Input: "));

  if (count($input) === 1) {
    $command = $input[0];
  } else {
    if (is_numeric($input[0])) {
      $phone = $input[0];
      $name = $input[1];
    } else {
      $name = $input[0];
      $phone = $input[1];
    }
  }

  $phonebook[$name] = $phone;
} while ($command != "Over");

// Custom comparison function for case-insensitive sorting
function caseInsensitiveKeySort($a, $b) {
  return strcasecmp($a, $b);
}

// Use uksort with the custom comparison function
uksort($phonebook, 'caseInsensitiveKeySort');

foreach ($phonebook as $name => $phone) {
  echo "{$name} -> {$phone}" . PHP_EOL;
}