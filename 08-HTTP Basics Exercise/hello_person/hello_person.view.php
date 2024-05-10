<form action="./hello_person.php" method="get">
  <div>
    <label for="name">Name:</label>
    <input type="text" name="name">
    <input type="submit" value="Submit">
  </div>
</form>

<?php 

if ($name) {
  echo "Hello, {$name}!";
} else {
  echo "Please, provide name!";
}

?>