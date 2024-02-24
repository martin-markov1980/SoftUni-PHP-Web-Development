<?php 

/*
  Problem 17. User Logins
  Write a program that receives a list of username-password pairs in the format “username -> password”. 
  If there’s already a user with that username, replace their password. 
  After you receive the command “login”, login requests start coming in, using the same format. 
  Your task is to print the status of user login, using different messages as per the conditions below:
    · If the password matches with the user’s password, print “username: logged in successfully”.
    · If the user doesn’t exist, or the password doesn’t match the user, print “username: login failed”.

  When you receive the command “end”, print the count of unsuccessful login attempts, using the format “unsuccessful login attempts: count”.  

  Example.
  Input:
    ivan_ivanov -> java123
    pesh0 -> qwerty
    stamat4e -> 111111
    princess_penka -> MyPrince
    login
    pesh0 -> qwertt
    ivan_ivanov -> java123
    stamat4e -> 111112
    princess_penka -> MyPrince
    end

  Output: 25
    pesh0: login failed 
    ivan_ivanov: logged in successfully 
    stamat4e: login failed 
    princess_penka: logged in successfully 
    unsuccessful login attempts: 2

  Comments: None
*/

$command = null;
$name = null;
$password = null;
$userLoginDetails = [];
do {
  $input = explode(" -> ", readline("Enter: Name -> Password: "));

  if (count($input) === 1) {
    $command = $input[0];
  } else {
    $name = $input[0];
    $password = $input[1];
  }

  $userLoginDetails[$name] = $password;
} while ($command != "login");

$unsuccessfulLoginAttempts = 0;
do {
  $input = explode(" -> ", readline("Enter Login Details: Name -> Password: "));

  if (count($input) === 1) {
    $command = $input[0];
  } else {
    $name = $input[0];
    $password = $input[1];

    if (array_key_exists($name, $userLoginDetails) && $userLoginDetails[$name] === $password) {
      echo "{$name}: logged in successfully" . PHP_EOL;
    } else {
      echo "{$name}: login failed" . PHP_EOL;
      $unsuccessfulLoginAttempts++;
    }

  }
} while ($command != "end");

echo "unsuccessful login attempts: {$unsuccessfulLoginAttempts}";
