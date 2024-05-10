<?php 

declare(strict_types=1);

if (isset($_GET["name"]) && strlen(trim($_GET["name"])) > 0) {
  $name = $_GET["name"];
}

include_once "./hello_person.view.php";