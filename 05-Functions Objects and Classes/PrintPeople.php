<?php

declare(strict_types=1);

/*
  Problem 8. Print People
  Create a class Person. Every person should have name, age and occupation. 
  Your task is to create the class and read some people, while adding them to an array. 
  Sort them by age and print them in the given format.

  Example.
  Input:
    Gosho 22 Dentist
    Mimi 13 Student
    END

  Output: 
    Mimi - age: 13, occupation: Student
    Gosho - age: 22, occupation: Dentist

  Comments: None
*/

class Person
{
  public $name;
  public $age;
  public $occupation;

  public function __construct(string $name, int $age, string $occupation)
  {
    $this->name = $name;
    $this->age = $age;
    $this->occupation = $occupation;
  }
  public function printInfo(): void
  {
    echo "{$this->name} - age: {$this->age}, occupation: {$this->occupation}";
  }
}

$people = [];
$command = null;
do {
  $personInfo = explode(" ", readline("Enter END to stop the program or person info in the format: Name age occupation: "));
  if (count($personInfo) === 1) {
    $command = "END";
    break;
  } else {
    $name = $personInfo[0];
    $age = intval($personInfo[1]);
    $occupation = $personInfo[2];
  }
  $people[] = new Person($name, $age, $occupation);
} while ($command != "END");

usort($people, function ($a, $b) {
  if ($a->age > $b->age) {
    return 1;
  } elseif ($a->age < $b->age) {
    return -1;
  } else {
    return 0;
  }
});

foreach ($people as $person) {
  $person->printInfo();
  echo PHP_EOL;
}
