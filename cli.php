<?php
require './distance_library.php';
require_once 'Colors.php';

$colors = new Colors();

#get user inputs in Cli
$strA = readline($colors->getColoredString("Please enter the first string to compare: ", 'light_blue', null));
$strB = readline($colors->getColoredString("Please enter the second string to compare: ", 'light_blue', null));

#Formulate distance ouput
$count = LevenshteinCalculator::levenshtein_dis($strA, $strB);
echo $colors->getColoredString("The Levenshtein distance is: ". $count.PHP_EOL, 'light_green', null);
