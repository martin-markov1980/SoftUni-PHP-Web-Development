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

// Create class Employee and Department with name and department people. Write the main logic

class EmployeeOOP
{
  private $name;
  private $salary;
  private $position;
  private $department;
  private $email;
  private $age;

  public function __construct(string $name, float $salary, string $position, string $department, string $email = "n/a", int $age = -1)
  {
    $this->name = $name;
    $this->salary = $salary;
    $this->position = $position;
    $this->department = $department;
    $this->email = $email;
    $this->age = $age;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function getSalary(): string
  {
    return number_format($this->salary, 2);
  }

  public function getEmail(): string
  {
    return $this->email;
  }

  public function getAge(): int
  {
    return $this->age;
  }

  public function getDepartmentName(): string
  {
    return $this->department;
  }
}

class DepartmentOOP
{
  private $departmentName;
  private $departmentPeople;

  public function __construct(string $departmentName)
  {
    $this->departmentName = $departmentName;
    $this->departmentPeople = [];
  }

  public function addEmployee(EmployeeOOP $employee): void
  {
    $this->departmentPeople[] = $employee;
  }

  public function getAverageSalary(): float
  {
    $totalSalaries = null;
    foreach ($this->departmentPeople as $person) {
      $totalSalaries += $person->getSalary();
    }

    return $totalSalaries / count($this->departmentPeople);
  }

  public function getPeople(): array
  {
    return $this->departmentPeople;
  }
}

$inputNumberOfEmployees = intval(readline("Number: "));

$employees = [];
while ($inputNumberOfEmployees--) {
  $employeeInfoArr = explode(" ", readline("Employee Info: "));
  $employeeName = $employeeInfoArr[0];
  $employeeSalary = floatval($employeeInfoArr[1]);
  $employeePosition = $employeeInfoArr[2];
  $employeeDepartment = $employeeInfoArr[3];
  $employeeEmail = null;
  $employeeAge = null;
  $employee = null;

  if (count($employeeInfoArr) === 4) {
    $employee = new EmployeeOOP($employeeName, $employeeSalary, $employeePosition, $employeeDepartment);
  } elseif (count($employeeInfoArr) === 5) {
    $inputUserIsAge = is_numeric($employeeInfoArr[4]);
    if ($inputUserIsAge) {
      $employeeAge = intval($employeeInfoArr[4]);
      $employee = new EmployeeOOP($employeeName, $employeeSalary, $employeePosition, $employeeDepartment, "n/a", $employeeAge);
    } else {
      $employeeEmail = $employeeInfoArr[4];
      $employee = new EmployeeOOP($employeeName, $employeeSalary, $employeePosition, $employeeDepartment, $employeeEmail, -1);
    }
  } else {
    $employeeEmail = $employeeInfoArr[4];
    $employeeAge = intval($employeeInfoArr[5]);
    $employee = new EmployeeOOP($employeeName, $employeeSalary, $employeePosition, $employeeDepartment, $employeeEmail, $employeeAge);
  }

  $employees[] = $employee;
}

$departments = [];
foreach ($employees as $employee) {
  if (!array_key_exists($employee->getDepartmentName(), $departments)) {
    $department = new DepartmentOOP($employee->getDepartmentName());
    $department->addEmployee($employee);
    $departments[$employee->getDepartmentName()] = $department;
  } else {
    $departments[$employee->getDepartmentName()]->addEmployee($employee);
  }
}

usort($departments, function ($d1, $d2) {
  return $d2->getAverageSalary() - $d1->getAverageSalary();
});

$peopleWithHighestAverageSalary = $departments[0]->getPeople();
usort($peopleWithHighestAverageSalary, function ($p1, $p2) {
  return $p2->getSalary() <=> $p1->getSalary();
});

$highestAverageSalaryDepartmentName = $peopleWithHighestAverageSalary[0]->getDepartmentName();

echo "Highest Average Salary: {$highestAverageSalaryDepartmentName}" . PHP_EOL;
foreach ($peopleWithHighestAverageSalary as $person) {
  echo "{$person->getName()} {$person->getSalary()} {$person->getEmail()} {$person->getAge()}" . PHP_EOL;
}
