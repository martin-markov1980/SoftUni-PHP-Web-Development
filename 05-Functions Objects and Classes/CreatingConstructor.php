<?php

declare(strict_types=1);

/*
  Problem 7. Creating Constructor
  Add constructor to the Person class from the last task:
  1. It should accept a string for the name and an integer for the age and should produce a person with the given name and age.

  Example.
  Input:
    Pesho 
    20
    Gosho
    18

  Output: 
    Pesho 
    20
    Gosho 
    18

  Comments: None
*/

class Person
{
  public $name;
  public $age;

  public function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
    echo $this->age . " " . $this->name . PHP_EOL;
  }
}

$pesho = new Person("Pesho", 20); // Pesho 20
$gosho = new Person("Gosho", 18); // Gosho 18
$stamat = new Person("Stamat", 43); // Stamat 43
