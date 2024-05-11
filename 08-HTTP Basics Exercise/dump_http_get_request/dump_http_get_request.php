<form action="./dump_http_get_request.php" method="get">
  <div>
    <label for="name">Name:</label>
    <br>
    <input type="text" name="name">
  </div>
  <div>
    <label for="age">Age:</label>
    <br>
    <input type="number" name="age">
  </div>
  <div>
    <label for="town">Town:</label>
    <br>
    <select name="town">
      <option value="10">Sofia</option>
      <option value="20">Varna</option>
    </select>
  </div>
  <div>
    <input type="submit" value="Submit">
  </div>
</form>

<?php

echo "<pre>";
var_dump($_GET);
echo "</pre>";
echo "<br>";
echo "<pre>";
print_r($_GET);
echo "</pre>";
?>