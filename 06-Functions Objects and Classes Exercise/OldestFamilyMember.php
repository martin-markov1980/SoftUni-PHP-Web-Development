<?php

declare(strict_types=1);

/*
  Problem 18. Oldest Family Member
  
  Create class Person with fields name and age. Create a class Family. The class should have list of people, 
  method for adding members (void addMember(Person member)) and a method returning the oldest family member (Person getOldestMember()). 
  Write a program that reads name and age for N people and adds them to the family. Then print the name and age of the oldest member.
  If you’ve defined the class correctly, the test should pass.

  Example.

  Input:
    3
    Pesho 3
    Gosho 4
    Annie 5

  Output: 
    Annie 5

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

  public function getAge(): int
  {
    return $this->age;
  }

  public function getName(): string
  {
    return $this->name;
  }
}

class Family
{
  private $listOfPeople;

  public function __construct()
  {
    $this->listOfPeople = [];
  }

  public function addMember(Person $member): void
  {
    $this->listOfPeople[] = $member;
  }

  public function getOldestMember(): Person
  {
    $oldestPerson = $this->listOfPeople[0];

    for ($i = 1; $i < count($this->listOfPeople); $i++) {
      $currentPerson = $this->listOfPeople[$i];
      if ($currentPerson->getAge() > $oldestPerson->getAge()) {
        $oldestPerson = $currentPerson;
      }
    }

    return $oldestPerson;
  }
}

$family = new Family();
$inputCount = intval(readline("Number: "));
while ($inputCount--) {
  $currentPerson = explode(" ", readline("Person: "));
  $currentPersonName = $currentPerson[0];
  $currentPersonAge = intval($currentPerson[1]);
  $currentFamilyMember = new Person($currentPersonName, $currentPersonAge);
  $family->addMember($currentFamilyMember);
}

echo $family->getOldestMember()->getName() . " " . $family->getOldestMember()->getAge();
