<?php

declare(strict_types=1);

/*
  Problem 17. Google
  
  Google is always watching you, so it should come as no surprise that they know everything about you (even your pokemon collection), 
  since you’re really good at writing classes Google asked you to design a Class that can hold all the information they need for people.

  From the console you will receive an unknown amount of lines until the command “End” is read, 
  on each of those lines there will be information about a person in one of the following formats:

    “<Name> company <companyName> <department> <salary>”
    “<Name> pokemon <pokemonName> <pokemonType>”
    “<Name> parents <parentName> <parentBirthday>”
    “<Name> children <childName> <childBirthday>”
    “<Name> car <carModel> <carSpeed>”

  You should structure all information about a person in a class with nested subclasses. 
  People’s names are unique - there won’t be 2 people with the same name, a person can also have only 1 company and car, but can have multiple parents, children and pokemon. 
  After the command “End” is received on the next line you will receive a single name, you should print all information about that person. 
  Note that information can change during the input, for instance if we receive multiple lines which specify a person’s company, only the last one should be the one remembered. 
  The salary must be formatted to two decimal places after the separator.  

  Example.

  Input:
    PeshoPeshev company PeshInc Management 1000.00
    TonchoTonchev car Trabant 30
    PeshoPeshev pokemon Pikachu Electricity
    PeshoPeshev parents PoshoPeshev 22/02/1920
    TonchoTonchev pokemon Electrode Electricity
    End
    TonchoTonchev

  Output: 
    TonchoTonchev 
    Company: 
    Car: 
    Trabant 30 
    Pokemon: 
    Electrode Electricity 
    Parents: 
    Children: 

  Comments:
    None
*/

class Person
{
  private $name;
  private $company;
  private $pokemons;
  private $parents;
  private $children;
  private $car;

  public function __construct(string $name)
  {
    $this->name = $name;
    $this->pokemons = [];
    $this->parents = [];
    $this->children = [];
  }

  public function __toString()
  {
    $company = isset($this->company) ? "\n" . $this->company : false;
    $car = isset($this->company) ? "\n" . $this->car : false;

    $pokemons = null;
    foreach ($this->pokemons as $pokemon) {
      $pokemons .= "\n" . $pokemon;
    }
    $pokemons = $pokemons != null ? $pokemons : false;

    $parents = null;
    foreach ($this->parents as $parent) {
      $parents .= "\n" . $parent;
    }
    $parents = $parents != null ? $parents : false;

    $children = null;
    foreach ($this->children as $child) {
      $children .= "\n" . $child;
    }
    $children = $children != null ? $children : false;

    return "{$this->name} \nCompany:{$company} \nCar:{$car} \nPokemon:{$pokemons} \nParents:{$parents} \nChildren:{$children}";
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function addPokemon(Pokemon $pokemon): void
  {
    $this->pokemons[] = $pokemon;
  }

  public function addChild(Child $child): void
  {
    $this->children[] = $child;
  }

  public function addParent(Parentt $parent): void
  {
    $this->parents[] = $parent;
  }

  public function addCar(Car $car): void
  {
    $this->car = $car;
  }

  public function addCompany(Company $company): void
  {
    $this->company = $company;
  }
}

class Company
{
  private $name;
  private $department;
  private $salary;

  public function __construct(string $name, string $department, float $salary)
  {
    $this->name = $name;
    $this->department = $department;
    $this->salary = number_format($salary, 2);
  }

  public function __toString()
  {
    return "{$this->name} {$this->department} {$this->salary}";
  }
}

class Car
{
  private $model;
  private $speed;

  public function __construct(string $model, int $speed)
  {
    $this->model = $model;
    $this->speed = $speed;
  }

  public function __toString()
  {
    return "{$this->model} {$this->speed}";
  }
}

class Pokemon
{
  private $name;
  private $type;

  public function __construct(string $name, string $type)
  {
    $this->name = $name;
    $this->type = $type;
  }

  public function __toString()
  {
    return "{$this->name} {$this->type}";
  }
}

class Parentt
{
  private $name;
  private $birthday;

  public function __construct(string $name, string $birthday)
  {
    $this->name = $name;
    $this->birthday = $birthday;
  }

  public function __toString()
  {
    return "{$this->name} {$this->birthday}";
  }
}

class Child
{
  private $name;
  private $birthday;

  public function __construct(string $name, string $birthday)
  {
    $this->name = $name;
    $this->birthday = $birthday;
  }
  
  public function __toString()
  {
    return "{$this->name} {$this->birthday}";
  }
}

$people = [];

$command = readline("Command: ");
while ($command != "End") {
  $personInfo = explode(" ", $command);
  $personName = $personInfo[0];
  $currentInfoCommand = $personInfo[1];
  $person = new Person($personName);

  if ($currentInfoCommand === "company") {
    $companyName = $personInfo[2];
    $department = $personInfo[3];
    $salary = floatval($personInfo[4]);
    $company = new Company($companyName, $department, $salary);
    $person->addCompany($company);
  } elseif ($currentInfoCommand === "car") {
    $companyCarModel = $personInfo[2];
    $companyCarSpeed = intval($personInfo[3]);
    $car = new Car($companyCarModel, $companyCarSpeed);
    $person->addCar($car);
  } elseif ($currentInfoCommand === "pokemon") {
    $pokemonName = $personInfo[2];
    $pokemonType = $personInfo[3];
    $pokemon = new Pokemon($pokemonName, $pokemonType);
    $person->addPokemon($pokemon);
  } elseif ($currentInfoCommand === "parents") {
    $parentName = $personInfo[2];
    $dateOfBirth = $personInfo[3];
    $parent = new Parentt($parentName, $dateOfBirth);
    $person->addParent($parent);
  } elseif ($currentInfoCommand === "children") {
    $childName = $personInfo[2];
    $dateOfBirth = $personInfo[3];
    $child = new Child($childName, $dateOfBirth);
    $person->addChild($child);
  }

  if (!array_key_exists($person->getName(), $people)) {
    $people[$person->getName()] = $person;
  } else {
    if ($currentInfoCommand === "company") {
      $people[$person->getName()]->addCompany($company);
    } elseif ($currentInfoCommand === "car") {
      $people[$person->getName()]->addCar($car);
    } elseif ($currentInfoCommand === "pokemon") {
      $people[$person->getName()]->addPokemon($pokemon);
    } elseif ($currentInfoCommand === "parents") {
      $people[$person->getName()]->addParent($parent);
    } elseif ($currentInfoCommand === "children") {
      $people[$person->getName()]->addChild($child);
    }
  }

  $command = readline("Command: ");
}

$name = readline("Name: ");

foreach ($people as $person) {
  if ($person->getName() === $name) {
    echo $person;
  }
}
