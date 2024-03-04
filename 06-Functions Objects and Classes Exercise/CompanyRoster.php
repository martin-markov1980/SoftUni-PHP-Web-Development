<?php

declare(strict_types=1);

/*
  Problem 12. Company Roster
  
  Define a class Employee that holds the following information: name, salary, position, department, email and age. 
  The name, salary, position and department are mandatory while the rest are optional.

  Your task is to write a program which takes N lines of employees from the console and calculates the department with the highest average salary and 
  prints for each employee in that department his name, salary, email and age – sorted by salary in descending order. 
  If an employee doesn’t have an email – in place of that field you should print “n/a” instead, if he doesn’t have an age – print “-1” instead. 
  The salary should be printed to two decimal places after the separator.

  Example.
  Input:
    4
    Pesho 120.00 Dev Development pesho@abv.bg 28
    Toncho 333.33 Manager Marketing 33
    Ivan 840.20 ProjectLeader Development ivan@ivan.com
    Gosho 0.20 Freeloader Nowhere 18

  Output: 
    Highest Average Salary: Development
    Ivan 840.20 ivan@ivan.com -1
    Pesho 120.00 pesho@abv.bg 28

  Comments:
    None
*/

// Take the input

class Employee
{
  private $name;
  private $salary;
  private $position;
  private $department;
  private $email;
  private $age;

  public function __construct(string $name, float $salary, string $position, string $department,  ?string $email = "n/a", ?int $age = -1)
  {
    $this->name = $name;
    $this->salary = $salary;
    $this->position = $position;
    $this->department = $department;
    $email === null ? $this->email = "n/a" : $this->email = $email;
    $age === null ? $this->age = -1 : $this->age = $age;
  }

  public function getSalary(): float
  {
    return $this->salary;
  }

  public function getDepartment(): string
  {
    return $this->department;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function getEmail(): string
  {
    return $this->email;
  }

  public function getAge(): int
  {
    return $this->age;
  }
}

// $p1 = new Employee("Pesho", 120.00, "Dev", "Development", "pesho@abv.bg", 28);

$inputNum = intval(readline("Number: "));
$employee = null;
$employees = [];
while ($inputNum-- > 0) {
  $employeeInfoArr = explode(" ", readline("Employee Info: "));
  if (count($employeeInfoArr) === 4) {
    $name = $employeeInfoArr[0];
    $salary = floatval($employeeInfoArr[1]);
    $position = $employeeInfoArr[2];
    $department = $employeeInfoArr[3];
    $employee = new Employee($name, $salary, $position, $department);
  } elseif (is_numeric($employeeInfoArr[4]) && count($employeeInfoArr) === 5) {
    $name = $employeeInfoArr[0];
    $salary = floatval($employeeInfoArr[1]);
    $position = $employeeInfoArr[2];
    $department = $employeeInfoArr[3];
    $email = null;
    $age = intval($employeeInfoArr[4]);

    $employee = new Employee($name, $salary, $position, $department, $email, $age);
  } elseif (!is_numeric($employeeInfoArr[4]) && count($employeeInfoArr) === 5) {
    $name = $employeeInfoArr[0];
    $salary = floatval($employeeInfoArr[1]);
    $position = $employeeInfoArr[2];
    $department = $employeeInfoArr[3];
    $email = $employeeInfoArr[4];
    $age = null;

    $employee = new Employee($name, $salary, $position, $department, $email, $age);
  } else {
    $name = $employeeInfoArr[0];
    $salary = floatval($employeeInfoArr[1]);
    $position = $employeeInfoArr[2];
    $department = $employeeInfoArr[3];
    $email = $employeeInfoArr[4];
    $age = intval($employeeInfoArr[5]);

    $employee = new Employee($name, $salary, $position, $department, $email, $age);
  }


  $employees[] = $employee;
}

$employeeByDepartments = [];
foreach ($employees as $employee) {
  $employeeByDepartments[$employee->getDepartment()][] = $employee;
}

$highestAverageSalaryDepartment = [];
$avrTotalSalary = null;
foreach ($employeeByDepartments as $department => $employees) {
  $currentAvgSalary = null;
  foreach ($employees as $employee) {
    $currentAvgSalary += $employee->getSalary();
  }
  $currentAvgSalary = $currentAvgSalary / count($employees);
  if ($avrTotalSalary < $currentAvgSalary) {
    $avrTotalSalary = $currentAvgSalary;
    $highestAverageSalaryDepartment[0] = $employees;
  }
}
$lastArrayKey = array_key_last($highestAverageSalaryDepartment);
$highestAverageSalaryDepartment = $highestAverageSalaryDepartment[$lastArrayKey];



usort($highestAverageSalaryDepartment, function ($a, $b) {
  return $b->getSalary() <=> $a->getSalary();
});


$dName = $highestAverageSalaryDepartment[0]->getDepartment();
echo "Highest Average Salary: {$dName}" . PHP_EOL;
foreach ($highestAverageSalaryDepartment as $key => $value) {
  echo "{$value->getName()} {$value->getSalary()} {$value->getEmail()} {$value->getAge()}";
  echo PHP_EOL;
}
