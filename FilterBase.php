<?php 

/*
  Problem 19. Filter Base
  You have been tasked to sort out a database full of information about employees. 
  You will be given several input lines containing information in one of the following formats:

    · name -> age
    · name -> salary
    · name -> position

  As you see you have 2 parameters. There can be only 3 cases of input: 
  If the second parameter is an integer, you must store it as name and age.

  If the second parameter is a floating-point number, you must store it as name and salary.
  If the second parameter is a string, you must store it as name and position
  You must read input lines, then parse and store the information from them, until you receive the command “filter base”. 
  When you receive that command, the input sequence of employee information should end.

  On the last line of input, you will receive a string, which can either be “Age”, “Salary” or “Position”. 
  Depending on the case, you must print all entries which have been stored as name and age, name and salary, or name and position.

  In case, the given last line is “Age”, you must print every employee, stored with its age in the following format:

  Example.
  Input:
    Isacc -> 34 
    Peter -> CEO 
    Isacc -> 4500.054321 
    George -> Cleaner 
    John -> Security 
    Nina -> Secretary 
    filter base 
    Position

  Output: 25
    Name: Peter 
    Position: CEO 
    ==================== 
    Name: George 
    Position: Cleaner 
    ==================== 
    Name: John 
    Position: Security 
    ==================== 
    Name: Nina 
    Position: Secretary 
    ====================

  Comments: None
*/

$command = null;
$employeeInfo = null;
$employeeName = null;
$employeeAge = null;
$employeeSalary = null;
$employeePosition = null;
$employeeDataBase = [];
do {
  $input = explode(" ", readline("Enter employee info in format 'name -> info' info can be age = integer, salary = floating number, position text: "));

  if (count($input) === 2) {
    $command = "filter base";
  } else {
    $employeeName = $input[0];
    $employeeInfo = $input[2];

    $isAge = !strpos($employeeInfo, ".") && is_numeric($employeeInfo);
    $isSalary = strpos($employeeInfo, ".") && is_numeric($employeeInfo);
    $isPosition = !is_numeric($employeeInfo);
    if ($isAge) {
      $employeeDataBase[$employeeName]["Age"] = $employeeInfo;
    } elseif ($isSalary) {
      $employeeDataBase[$employeeName]["Salary"] = number_format(round(floatval($employeeInfo), 2), 2, ".", "");
    } elseif ($isPosition) {
      $employeeDataBase[$employeeName]["Position"] = $employeeInfo;
    }
  }

} while ($command != "filter base");

$inputFilter = readline("Enter employee Age, Salary or Position: ");

foreach ($employeeDataBase as $name => $info) {
  if (isset($info[$inputFilter])) {
    echo "Name: {$name}" . PHP_EOL;
    echo "{$inputFilter}: {$info[$inputFilter]}" . PHP_EOL;
    echo "====================" . PHP_EOL;
  }
}
