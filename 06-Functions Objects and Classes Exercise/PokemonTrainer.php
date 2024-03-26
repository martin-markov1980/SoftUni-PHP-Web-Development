<?php

declare(strict_types=1);

/*
  Problem 16. Pokemon Trainer
  
  You wanna be the very best pokemon trainer, like no one ever was, so you set out to catch pokemon. 
  Define a class Trainer and a class Pokemon. Trainers have a name, number of badges and a collection of pokemon, 
  Pokemon have a name, an element and health, all values are mandatory. Every Trainer starts with 0 badges.

  From the console you will receive an unknown number of lines until you receive the command “Tournament”, each line will carry information about a pokemon and the trainer who caught it in the format 
  “<TrainerName> <PokemonName> <PokemonElement> <PokemonHealth>” where TrainerName is the name of the Trainer who caught the pokemon, 
  names are unique there cannot be 2 trainers with the same name. After receiving the command “Tournament” an unknown number of lines containing one of three elements “Fire”, 
  “Water”, “Electricity” will follow until the command “End” is received.

  For every command you must check if a trainer has atleast 1 pokemon with the given element, if he does he receives 1 badge, otherwise all his pokemon lose 10 health, 
  if a pokemon falls to 0 or less health he dies and must be deleted from the trainer’s collection. After the command “End” 
  is received you should print all trainers sorted by the amount of badges they have in descending order (if two trainers have the same amount of 
  badges they should be sorted by order of appearance in the input) in the format “<TrainerName> <Badges> <NumberOfPokemon>”.

  Example.
  Input:
    Pesho Charizard Fire 100
    Gosho Squirtle Water 38
    Pesho Pikachu Electricity 10
    Tournament
    Fire
    Electricity
    End

  Output: 
    Pesho 2 2 
    Gosho 0 1

  Comments:
    None
*/

class Trainer
{
  private $name;
  private $numberOfBadges = 0;
  private $collectionOfPokemons;

  public function __construct(string $name)
  {
    $this->name = $name;
    $this->collectionOfPokemons = [];
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function addPokemon(Pokemon $pokemon): void
  {
    $this->collectionOfPokemons[] = $pokemon;
  }

  public function addBadge(): void
  {
    $this->numberOfBadges++;
  }

  public function getBadges(): int
  {
    return $this->numberOfBadges;
  }

  public function getPokemons(): array
  {
    return $this->collectionOfPokemons;
  }

  public function getPokemonsCount(): int
  {
    return count($this->collectionOfPokemons);
  }

  public function removePokemon(int $index): void
  {
    unset($this->collectionOfPokemons[$index]);
  }
}

class Pokemon
{
  private $name;
  private $element;
  private $health;

  public function __construct(string $name, string $element, int $health)
  {
    $this->name = $name;
    $this->element = $element;
    $this->health = $health;
  }

  public function getElement(): string
  {
    return $this->element;
  }

  public function getHealth(): int
  {
    return $this->health;
  }

  public function subtractHealth(): void
  {
    $this->health -= 10;
  }
}

$trainers = [];
$command = readline("Command: ");
while ($command != "Tournament") {
  $input = explode(" ", $command);
  $trainerName = $input[0];
  $pokemonName = $input[1];
  $pokemonElement = $input[2];
  $pokemonHealth = intval($input[3]);
  $trainer = new Trainer($trainerName);
  $pokemon = new Pokemon($pokemonName, $pokemonElement, $pokemonHealth);
  
  if (!array_key_exists($trainerName, $trainers)) {
    $trainers[$trainerName] = $trainer;
    $trainer->addPokemon($pokemon);
  } else {
    $trainers[$trainerName]->addPokemon($pokemon);
  }

  $command = readline("Command: ");
}

$command = readline("Command: ");

while ($command != "End") {
  foreach ($trainers as $trainer) {
    $hasPokemonWithGivenElement = false;
    $trainerPokemons = $trainer->getPokemons();
    foreach ($trainerPokemons as $pokemon) {
      if ($pokemon->getElement() === $command) {
        $hasPokemonWithGivenElement = true;
      }
    }
    if ($hasPokemonWithGivenElement) {
      $trainer->addBadge();
    } else {
      foreach ($trainerPokemons as $key => $pokemon) {
        $pokemon->subtractHealth();
        if ($pokemon->getHealth() <= 0) {
          $trainer->removePokemon($key);
        }
      }
    }
  }

  $command = readline("Command: ");
}

usort($trainers, function ($t1, $t2) {
  return $t2->getBadges() <=> $t1->getBadges();
});

foreach ($trainers as $trainer) {
  echo $trainer->getName() . " " . $trainer->getBadges() . " " . $trainer->getPokemonsCount() . PHP_EOL;
}