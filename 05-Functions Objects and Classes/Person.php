<?php

declare(strict_types=1);

/*
  Problem 6. Person
  Define a class Person with fields for name and age.
  The output on the console should be 2. If you defined the class correctly, the test should pass.

  Example.
  Input:
    None

  Output: 
    None

  Comments: None
*/

class Person 
{
  public $name;
  public $age;
}

$person = new Person();

echo(count(get_object_vars($person))); // 2
