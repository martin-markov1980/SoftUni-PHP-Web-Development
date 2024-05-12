<?php

$cities = explode("\n", $_GET["text"]);
// Removing the front and back empty space from each city
$cities = array_map(function($e){
  return trim($e);
}, $cities);

sort($cities, SORT_NATURAL | SORT_FLAG_CASE);
$citiesOutput = "";
foreach ($cities as $city) {
  $citiesOutput .= $city . "\n";
}

include "./sort_lines.view.php";