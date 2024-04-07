<?php

declare(strict_types=1);

/*
  Problem 19. Car
  
  Create a class Car. Every car has a speed (km/h), fuel (liters) and fuel economy (L/100km) 
  (given in the same order on the first line). They should be stored in the class. 
  Your task is to create a program which executes one of the commands:

  · Travel <distance> – makes the car travel the specified <distance>
  If you are given a distance which you don't have enough fuel to travel, just go as far as you can.
  · Refuel <liters> – refuels the car with the specified <fuel>
  · Distance – gets the total travel distance
  · Time – get the total travel time
  · Fuel – gets the remaining fuel
  · END – stops the program

  Print the total distance traveled, total travel time and fuel left at the end of the trip as in the Example below.

  Round values up to one decimal digit after the decimal point, applies for kilometers and liters.
  Show only minutes, discarding the seconds. For Example 2 minutes 40 seconds and 2 minutes 20 seconds all become 2 minutes.


  Example.

  Input:
    100 20 20
    Travel 100
    Distance
    Time
    Fuel
    END

  Output: 
    Total Distance: 100.0 
    Total Time: 1 hours and 0 minutes 
    Fuel left: 0.0 liters

  Comments:
    None
*/

class Car 
{
  private $speed;
  private $fuel;
  private $fuelEconomy;

  private $distance = 0;

  public function __construct(float $speed, float $fuel, float $fuelEconomy)
  {
    $this->speed = $speed;
    $this->fuel = $fuel;
    $this->fuelEconomy = $fuelEconomy;
  }

  public function travel(float $distance): void
  {
    $currentDistanceICanTravel = ($this->fuel / $this->fuelEconomy) * 100;
    if ($currentDistanceICanTravel - $distance <= 0) {
      $this->distance += $currentDistanceICanTravel;
      $this->fuel = 0;
    } else {
      $this->distance += $distance;
      $burnedFuel = ($this->fuelEconomy / 100) * $distance;
      $this->burnFuel($burnedFuel);
    }
  }

  public function getDistance(): float
  {
    return floatval($this->distance);
  }

  public function getTravelTime(): string
  {
    $hours = 0;
    $minutes = null;
    $travelTimeInMinutes = ($this->getDistance() / $this->speed) * 60;
    while ($travelTimeInMinutes >= 60) {
      $hours += 1;
      $travelTimeInMinutes -= 60;
    }
    $minutes = number_format($travelTimeInMinutes);
    
    return "Total Time: {$hours} hours and {$minutes} minutes";
  }

  public function getFuel(): float
  {
    return $this->fuel;
  }

  public function burnFuel($fuel): void
  {
    $this->fuel -= $fuel;
  }

  public function reFuel(float $fuel): void
  {
    $this->fuel += $fuel;
  }
}

$input = [100, 20, 20];
$speed = floatval($input[0]);
$fuel = floatval($input[1]);
$fuelEconomy = floatval($input[2]);

$car = new Car($speed, $fuel, $fuelEconomy);

$car->travel(100);
echo "Total Distance: " . number_format($car->getDistance(), 1);
echo PHP_EOL;
echo $car->getTravelTime();
echo PHP_EOL;
echo "Fuel left: " . number_format($car->getFuel(), 1) . " liters";
