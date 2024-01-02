<?php

/*
    3. Passed or Failed
    Modify the above program, so it will print "Failed!" if the grade is lower than 3.00.
    Input:
    The input comes as a single double number.
*/

echo "Enter a grade below please:" . PHP_EOL;
$grade = floatval(readline());

if ($grade >= 3) {
  echo "Passed!";
} else {
  echo "Failed!";
}
