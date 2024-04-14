<?php

if (isset($_GET["calculate"])) {
  $command = $_GET["operation"];
  $numOne = floatval($_GET["number_one"]);
  $numTwo = floatval($_GET["number_two"]);
  $output = null;
  if ($command === "sum") {
    $output = $numOne + $numTwo;
  } elseif ($command === "subtract") {
    $output = $numOne - $numTwo;
  }
}

?>

<?php include "./calculator_frontend.php" ?>
