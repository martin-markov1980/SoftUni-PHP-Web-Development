<?php 

/*
  Problem 18. Exam Shopping
  A supermarket has products which have quantities. Your task is to stock the shop before Exam Sunday. 
  Until you receive the command “shopping time”, add the various products to the shop’s inventory, keeping track of their quantity (for inventory purposes). 
  When you receive the aforementioned command, the students start pouring in before the exam and buy various products.

  The format for stocking a product is: “stock $product $quantity”. 

  The format for buying a product is: “buy $product $quantity”.

  If a student tries to buy a product, which doesn’t exist, print “$product doesn't exist”.
  If it does exist, but it’s out of stock, print “$product out of stock”. 
  If a student tries buying more than the quantity of that product, sell them all the quantity of the product (the product is left out of stock, don’t print anything).
  When you receive the command “exam time”, your task is to print the remaining inventory in the following format: “product -> quantity”. 
  If a product is out of stock, do not print it.

  Example.
  Input:
    stock Boca_Cola 16
    stock Kay's_Chips 33
    stock Lobster_Energy 60
    stock Boca_Cola 4
    stock Loreni 15
    stock Loreni 15
    stock Loreni 15
    stock Loreni 15
    shopping time
    buy Boca_Bola 2
    buy Lobster_Energy 20
    buy Boca_Cola 1
    buy Boba_Bola 12
    exam time

  Output: 25
    Boca_Bola doesn't exist 
    Boba_Bola doesn't exist 
    Boca_Cola -> 19 
    Kay's_Chips -> 33 
    Lobster_Energy -> 40 
    Loreni -> 60

  Comments: None
*/

$command = null;
$productName = null;
$productQuantity = null;
$productList = [];
do {
  $input = explode(" ", readline("Enter product 'stock Name Quantity': "));

  if (count($input) === 2) {
    $command = "shopping time";
  } else {
    $productName = $input[1];
    $productQuantity = $input[2];

    if (array_key_exists($productName, $productList)) {
      $productList[$productName] += $productQuantity;
    } else {
      $productList[$productName] = $productQuantity;
    }
  }

} while ($command != "shopping time");

print_r($productList);

do {
  $input = explode(" ", readline("Buy product 'buy Name Quantity': "));

  if (count($input) === 2) {
    $command = "exam time";
  } else {
    $productName = $input[1];
    $productQuantity = $input[2];

    if (array_key_exists($productName, $productList) && $productList[$productName] <= 0) {
      echo "{$productName} out of stock." . PHP_EOL;
  }

    if (array_key_exists($productName, $productList)) {
        $productList[$productName] - $productQuantity > 0 ? $productList[$productName] -= $productQuantity : $productList[$productName] = 0;
    } else {
      echo "{$productName} doesn't exist." . PHP_EOL;
    }
  }

} while ($command != "exam time");

foreach ($productList as $name => $value) {
  if ($value > 0) {
    echo "{$name} -> {$value}" . PHP_EOL;
  }
}
