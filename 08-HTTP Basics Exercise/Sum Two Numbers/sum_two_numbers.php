<?php

declare(strict_types=1);

$firstNumber = $_GET["first_number"];
$secondNumber = $_GET["second_number"];
if (isset($firstNumber, $secondNumber) && $firstNumber != "" && $secondNumber != "") {
  $sumResult = floatval($firstNumber) + floatval($secondNumber);
  $formResult = "{$firstNumber} + {$secondNumber} =  {$sumResult}";
} else {
  $formResult = "No Result!";
}

include_once "./sum_two_numbers.view.php";
?>