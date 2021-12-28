<?php

require './distance_library.php'; 	

// function to format test results
function test($valueA, $valueB, $testStr)
{
	if ($valueA == $valueB)
		echo 'Test passed: '.$testStr.PHP_EOL;
	else
		echo 'Test failed: '.$testStr.PHP_EOL;
}

// example strings 
$strA = 'this is a test';
$strB = 'this is test';
$strC = 'the is test';

// test HammingCalculator
test(HammingCalculator::hamming_dis($strA, $strB), 6, 'strA('.$strA.'), strB('.$strB.'), hamming');  	
test(HammingCalculator::hamming_dis($strB, $strC), 10, 'strB('.$strB.'), strC('.$strC.'), hamming');  

// test LevenshteinCalculator
test(LevenshteinCalculator::levenshtein_dis($strA, $strB), 2, 'strA('.$strA.'), strB('.$strB.'), levenshtein');
test(LevenshteinCalculator::levenshtein_dis($strB, $strC), 2, 'strA('.$strB.'), strB('.$strC.'), levenshtein');  	
