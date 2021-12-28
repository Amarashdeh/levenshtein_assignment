<?php
require './distance_library.php';

// Sanitise user inputs 
$strA = htmlspecialchars($_GET['strA']);
$strB = htmlspecialchars($_GET['strB']);

// Formulate distance statement
echo $distanceStatment = 'The Levenshtein distance is ' . LevenshteinCalculator::levenshtein_dis($strA, $strB);
