<?php

declare(strict_types=1);

/*
  Problem 9. Method Says Hello!
  You will receive the person name as an input. 
  Write a class Person that only has a name and a method. 
  The method should describe a greeting by the person, returning a String "<Person name> says Hello!". Print the result of the method call.

  Example.
  Input:
    Peter

  Output: 
    Peter says "Hello"!

  Comments: None
*/

class Person 
{
  public $name;

  public function __construct(string $name)
  {
    $this->name = $name;
  }

  public function greetByName(): string
  {
    return "{$this->name} says Hello!";
  }
}

$person = new Person("Peter");

echo($person->greetByName()); // Peter says "Hello"!
