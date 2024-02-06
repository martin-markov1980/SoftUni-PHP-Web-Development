<?php 

/*
  Problem 13. Phonebook
  Write a program that receives some info from the console about people and their phone numbers. 
  Each entry should have just one name and one number (both of them strings).

  On each line you will receive some of the following commands:

  · A {name} {phone} – adds entry to the phonebook. In case of trying to add a name that is already in the phonebook you should change the existing phone number with the new one provided.
  · S {name} – searches for a contact by given name and prints it in format "{name} -> {number}". In case the contact isn't found, print "Contact {name} does not exist.".
  · END – stop receiving more commands.

  Example.
  Input:
    A Nakov 0888080808
    S Mariika
    S Nakov

  Output: 25
    Contact Mariika does not exist.
    Nakov -> 0888080808

  Comments: None
*/

$phonebook = [];

do {
  $input = explode(" ", readline("Input: "));
  $command = $input[0];
  $name = isset($input[1]) ? $name = [$input[1]] : $name = null;
  $phone = isset($input[2]) ? $phone = [$input[1]] : $phone = null;

  if ($command === "A") {
    $phonebook[$name] = $phone;
  } elseif ($command === "S") {
    if (array_key_exists($name, $phonebook)) {
      echo "{$name} -> {$phonebook[$name]}" . PHP_EOL;
    } else {
      echo "Contact {$name} does not exist." . PHP_EOL;
    }
  }

} while ($command != "END");
