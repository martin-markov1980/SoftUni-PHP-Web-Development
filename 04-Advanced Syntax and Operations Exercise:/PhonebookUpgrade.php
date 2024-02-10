<?php 

/*
  Problem 14. Phonebook Upgrade
  Add functionality to the phonebook from the previous task to print all contacts ordered
  lexicographically when receive the command “ListAll”.

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
  isset($input[1]) ? $name = $input[1] : $name = null;
  isset($input[2]) ? $phone = $input[2] : $phone = null;

  if ($command === "A") {
    $phonebook[$name] = $phone;
    ksort($phonebook);
  } elseif ($command === "S") {
    if (array_key_exists($name, $phonebook)) {
      echo "{$name} -> {$phonebook[$name]}" . PHP_EOL;
    } else {
      echo "Contact {$name} does not exist." . PHP_EOL;
    }
  } elseif ($command === "ListAll") {
    foreach ($phonebook as $key => $value) {
      echo "{$key} -> {$value}" . PHP_EOL;
    }
  }

} while ($command != "END");
