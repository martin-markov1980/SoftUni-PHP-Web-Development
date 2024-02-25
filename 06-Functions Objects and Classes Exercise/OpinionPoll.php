<?php

declare(strict_types=1);

/*
  Problem 11. Opinion Poll
  
  Using the Person class, write a program that reads from the console N lines of personal information and 
  then prints all people whose age is more than 30 years, sorted in alphabetical order.

  Example.
  Input:
    3
    Pesho 12
    Stamat 31
    Ivan 48

  Output: 
    Ivan - 48 
    Stamat - 31

  Comments:
    None
*/

class Person
{
  private $name;
  private $age;

  public function __construct(string $name, int $age)
  {
    $this->name = $name;
    $this->age = $age;
  }

  public function getPersonInfo(): string
  {
    return "{$this->name} - {$this->age}";
  }

  public function getPersonAge(): int
  {
    return $this->age;
  }

  public function getPersonName(): string
  {
    return $this->name;
  }
}

$people = [];

$peopleCount = intval(readline("People count: "));

while ($peopleCount--) {
  $personNameAndAge = explode(" ", readline("Name Age: "));
  $personName = $personNameAndAge[0];
  $personAge = intval($personNameAndAge[1]);
  $people[] = new Person($personName, $personAge);
}


$peopleAboveAgeOf30 = array_filter($people, function (Person $person) {
  return $person->getPersonAge() > 30;
});

usort($peopleAboveAgeOf30, function (Person $personA, Person $personB) {
  return $personA->getPersonName() <=> $personB->getPersonName();
});

foreach ($peopleAboveAgeOf30 as $person) {
  echo $person->getPersonInfo() . PHP_EOL;
}
