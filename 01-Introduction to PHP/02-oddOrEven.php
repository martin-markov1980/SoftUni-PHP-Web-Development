<?php

/*
    2. Odd or Even
    Write a program which checks if a given number is odd or even. If it's odd print "odd", if it's even -"even"
*/

echo "Enter a number below please:" . PHP_EOL;
$number = readline();

$result = null;
$number % 2 === 0 ? $result = "even" : $result = "odd";

echo $result;
