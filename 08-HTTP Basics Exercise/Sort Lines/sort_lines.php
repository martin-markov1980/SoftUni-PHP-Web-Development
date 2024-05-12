<?php

if (isset($_GET["text"])) {
  $cities = explode("\n", $_GET["text"]);
  // Removing the front and back empty space from each city
  $cities = array_map("trim", $cities);
  // Removing empty string array values 
  $cities = array_filter($cities, function ($city) {
    return $city != "";
  });
  // Sorting alphabetical case insensitive 
  sort($cities, SORT_NATURAL | SORT_FLAG_CASE);
  $citiesOutput = "";
  foreach ($cities as $city) {
    $citiesOutput .= $city . "\n";
  }
}

include "./sort_lines.view.php";