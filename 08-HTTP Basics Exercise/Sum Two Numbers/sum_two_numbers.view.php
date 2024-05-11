<?php

echo $formResult;

?>

<form action="./sum_two_numbers.php" method="get">
  <div>
    <label for="first_number">First Number:</label>
    </br>
    <input type="number" step="any" name="first_number">
  </div>
  <div>
    <label for="second_number">Second Number:</label>
    </br>
    <input type="number" step="any" name="second_number">
  </div>
  <div>
    <input type="submit" value="Submit">
  </div>
</form>