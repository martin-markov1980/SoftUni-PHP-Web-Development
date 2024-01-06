<?php

/*
  Problem 8. Restaurant Discount
  A restaurant wants to automate their reservation process. 
  They need a program that reads the count of people and the package from the console and calculates how much the customer should pay to book the place.

     Different halls have different prices:
        Small Hall  Terrace Great Hall
  Price    2500$     5000$     7500$
  Capacity  50        100       120

    You can see the discounts in the table below:
           Normal   Gold   Platinum
  Discount   5%      10%      15%
  Price     500$     750$    1000$
*/

// Halls prices and capacities
$smallHallPrice = 2500;
$smallHallCapacity = 50;
$terraceHallPrice = 5000;
$terraceHallCapacity = 100;
$greatHallPrice = 7500;
$greatHallCapacity = 120;

// Discounts names and prices
$normalPackagePrice = 500;
$goldPackagePrice = 750;
$platinumPackagePrice = 1000;

$peopleCount = intval(readline("How many people are you: "));
$packageName = readline("Choose package: Normal, Gold, Platinum: ");

$pricePerPerson = null;
$hallName = null;
if ($peopleCount <= $smallHallCapacity) {
  $packageName === "Normal" ? $pricePerPerson = (($smallHallPrice + $normalPackagePrice) - ($smallHallPrice + $normalPackagePrice) * 0.05) / $peopleCount : null;
  $packageName === "Gold" ? $pricePerPerson = (($smallHallPrice + $goldPackagePrice) - ($smallHallPrice + $goldPackagePrice) * 0.10) / $peopleCount : null;
  $packageName === "Platinum" ? $pricePerPerson = (($smallHallPrice + $platinumPackagePrice) - ($smallHallPrice + $platinumPackagePrice) * 0.15) / $peopleCount : null;
  echo "We can offer you the Small Hall" . PHP_EOL;
  echo "The price per person is " . round($pricePerPerson, 2, PHP_ROUND_HALF_UP) . "$";
} elseif ($peopleCount <= $terraceHallCapacity) {
  $packageName === "Normal" ? $pricePerPerson = (($terraceHallPrice + $normalPackagePrice) - ($terraceHallPrice + $normalPackagePrice) * 0.05) / $peopleCount : null;
  $packageName === "Gold" ? $pricePerPerson = (($terraceHallPrice + $goldPackagePrice) - ($terraceHallPrice + $goldPackagePrice) * 0.10) / $peopleCount : null;
  $packageName === "Platinum" ? $pricePerPerson = (($terraceHallPrice + $platinumPackagePrice) - ($terraceHallPrice + $platinumPackagePrice) * 0.15) / $peopleCount : null;
  echo "We can offer you the Terrace" . PHP_EOL;
  echo "The price per person is " . round($pricePerPerson, 2, PHP_ROUND_HALF_UP) . "$";
} elseif ($peopleCount <= $greatHallCapacity) {
  $packageName === "Normal" ? $pricePerPerson = (($greatHallPrice + $normalPackagePrice) - ($greatHallPrice + $normalPackagePrice) * 0.05) / $peopleCount : null;
  $packageName === "Gold" ? $pricePerPerson = (($greatHallPrice + $goldPackagePrice) - ($greatHallPrice + $goldPackagePrice) * 0.10) / $peopleCount : null;
  $packageName === "Platinum" ? $pricePerPerson = (($greatHallPrice + $platinumPackagePrice) - ($greatHallPrice + $platinumPackagePrice) * 0.15) / $peopleCount : null;
  echo "We can offer you the Great Hall" . PHP_EOL;
  echo "The price per person is " . round($pricePerPerson, 2, PHP_ROUND_HALF_UP) . "$";
} else {
  echo "We do not have an appropriate hall.";
}
