<?php

declare(strict_types=1);

/*
  Problem 15. Car Salesman
  
  Define two classes Car and Engine. A Car has a model, engine, weight and color. 
  An Engine has model, power, displacement and efficiency. 
  A Car’s weight and color and its Engine’s displacements and efficiency are option.

  On the first line you will read a number N which will specify how many lines of engines you will receive, 
  on each of the next N lines you will receive information about an Engine in the following format 
  “<Model> <Power> <Displacement> <Efficiency>”.
  After the lines with engines, on the next line you will receive a number M
  – specifying the number of Cars that will follow, on each of the next M lines information about a 
  Car will follow in the following format “<Model> <Engine> <Weight> <Color>”,
  where the engine in the format will be the model of an existing Engine. 
  When creating the object for a Car, you should keep a reference to the real engine in it, 
  instead of just the engine’s model, note that the optional properties might be missing from the formats.

  Your task is to print each car (in the order you received them) and its information in the 
  format defined bellow, if any of the optional fields has not been given print “n/a” in its place instead:

    <CarModel>: 
      <EngineModel>: 
        Power: <EnginePower> 
        Displacement: <EngineDisplacement> 
        Efficiency: <EngineEfficiency> 
    Weight: <CarWeight> 
    Color: <CarColor>

  Example.

  Input:
    2
    V8-101 220 50
    V4-33 140 28 B
    3
    FordFocus V4-33 1300 Silver
    FordMustang V8-101
    VolkswagenGolf V4-33 Orange
  Output: 
    FordFocus:
      V4-33:
        Power: 140 
        Displacement: 28 
        Efficiency: B
      Weight: 1300
      Color: Silver
    FordMustang:
      V8-101:
        Power: 220
        Displacement: 50
        Efficiency: n/a
      Weight: n/a        
      Color: n/a
    VolkswagenGolf: 
      V4-33: 
        Power: 140 
        Displacement: 28 
        Efficiency: B 
      Weight: n/a 
      Color: Orange  

  Comments:
    None
*/

class Car
{
  private $model;
  private $engine;
  private $weight;
  private $color;

  public function __construct(string $model, Engine $engine, string $weight = "n/a", string $color = "n/a")
  {
    $this->model = $model;
    $this->engine = $engine;
    $this->weight = $weight;
    $this->color = $color;
  }

  public function __toString()
  {
    $space = " ";
    return sprintf("%s: \n%s \n%' 2sWeight: %s \n%' 2sColor: %s\n", $this->model, $this->engine, $space, $this->weight, $space, $this->color);
  }

  public function getModel(): string
  {
    return $this->model;
  }

  public function getEngine(): Engine
  {
    return $this->engine;
  }

  public function getWeight(): string
  {
    return $this->weight;
  }

  public function getColor(): string
  {
    return $this->color;
  }
}

class Engine 
{
  private $model;
  private $power;
  private $displacement;
  private $efficiency;

  public function __construct(string $model, int $power, string $displacement = "n/a", string $efficiency = "n/a")
  {
    $this->model = $model;
    $this->power = $power;
    $this->displacement = $displacement;
    $this->efficiency = $efficiency;
  }

  public function __toString()
  {
    $space = " ";
    return sprintf("%' 7s: \n%' 4sPower: %u \n%' 4sDisplacement: %s \n%' 4sEfficiency: %s", $this->model, $space, $this->power, $space, $this->displacement, $space, $this->efficiency);
  }

  public function getEngineName(): string
  {
    return $this->model;
  }
}

$enginesCount = intval(readline("Engines count: "));
$engines = [];
$engine = null;

while ($enginesCount--) {
  $engineInfo = explode(" ", readline("Engine info: "));
  if (count($engineInfo) === 4) {
    $model = $engineInfo[0];
    $power = intval($engineInfo[1]);
    $displacement = $engineInfo[2];
    $efficiency = $engineInfo[3];
    $engine = new Engine($model, $power, $displacement, $efficiency);
  } elseif (count($engineInfo) === 3) {
    if (is_numeric($engineInfo[2])) {
      $model = $engineInfo[0];
      $power = intval($engineInfo[1]);
      $displacement = $engineInfo[2];
      $engine = new Engine($model, $power, $displacement);
    } else {
      $model = $engineInfo[0];
      $power = intval($engineInfo[1]);
      $displacement = "n/a";
      $efficiency = $engineInfo[2];
      $engine = new Engine($model, $power, $displacement, $efficiency);
    }
  } else {
    $model = $engineInfo[0];
    $power = intval($engineInfo[1]);
    $engine = new Engine($model, $power);
  }

  $engines[] = $engine;
}

$carsCount = intval(readline("Cars count: "));
$cars = [];
$car = null;

while ($carsCount--) {
  $carInfo = explode(" ", readline("Car info: "));
  if (count($carInfo) === 4) {
    $model = $carInfo[0];
    $engine = $carInfo[1];
    $weight = $carInfo[2];
    $color = $carInfo[3];
    foreach ($engines as $eng) {
      if ($eng->getEngineName() === $engine) {
        $engine = $eng;
      }
    }
    $car = new Car($model, $engine, $weight, $color);
  } elseif (count($carInfo) === 3) {
    if (is_numeric($carInfo[2])) {
      $model = $carInfo[0];
      $engine = $carInfo[1];
      $weight = $carInfo[2];
      foreach ($engines as $eng) {
        if ($eng->getEngineName() === $engine) {
          $engine = $eng;
        }
      }
      $car = new Car($model, $engine, $weight);
    } else {
      $model = $carInfo[0];
      $engine = $carInfo[1];
      $weight = "n/a";
      $color = $carInfo[2];
      foreach ($engines as $eng) {
        if ($eng->getEngineName() === $engine) {
          $engine = $eng;
        }
      }
      $car = new Car($model, $engine, $weight, $color);
    }
  } else {
    $model = $carInfo[0];
    $engine = $carInfo[1];
    foreach ($engines as $eng) {
      if ($eng->getEngineName() === $engine) {
        $engine = $eng;
      }
    }
    $car = new Car($model, $engine);
  }

  $cars[] = $car;
}

print_r($cars);

echo PHP_EOL;
echo "-------------";
echo PHP_EOL;

foreach ($cars as $car) {
  echo $car;
}
