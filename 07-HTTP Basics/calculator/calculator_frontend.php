<h1>Calculator</h1>

<form method="get" action="./calculator.php">
  <div>
    <label for="operation">Operation:</label>
    <select name="operation">
      <option value="sum">Sum</option>
      <option value="subtract">Subtract</option>
    </select>
  </div>

  <div>
    <label for="numberOne">Number 1:</label>
    <input type="text" name="number_one">
  </div>

  <div>
    <label for="numberTwo">Number 2:</label>
    <input type="text" name="number_two">
  </div>

  <div>
    <input type="submit" name="calculate" value="Calculate!">
  </div>
</form>

<?php if (isset($output)) : ?>
  <h3>Result = <?php echo $output ?></h3>
<?php endif; ?>
