<?php
class HammingCalculator
{

	private $strA;
	private $strB;

	/**
	* Create instance of HammingCalculator
	* 
	* @param string a
	* @param string b
	* 
	* @return
	*/
	public function __construct(string $a, string $b)
	{
		$this->strA = $a;
		$this->strB = $b;
	}

	/**
	* Calculate hamming distance between the two string parameters
	* 
	* @param string a
	* @param string b
	* 
	* @return int - hamming distance between the two string parameters
	*/
	public static function hamming_dis(string $a, string $b): int
	{
		$calc = new self($a, $b);
		return $calc->calculate_portion(0);
	}

	/**
	* Recursive method to calculate hamming distance for a portion of the two strings.
	* 
	* @param int offset
	* 
	* @return int - hamming distance of the portion of the string after the offset
	*/
	private function calculate_portion(int $offset): int
	{
		//get lengths of strings
		$lenA = strlen($this->strA);
		$lenB = strlen($this->strB);

		// check if we are the the end of either string
		if ($lenA == $offset) {
			return $lenB - $lenA;
		} elseif ($lenB == $offset) {
			return $lenA - $lenB;
		}

		//compare characters at offset
		$charA = $this->strA[$offset];
		$charB = $this->strB[$offset];
		return !($charA == $charB) + $this->calculate_portion($offset+1);
	}
}

class LevenshteinCalculator
{

	private $strA;
	private $strB;
	private $distanceMap;

	/**
	* Create instance of LevenshteinCalculator
	*
	* @param string a
	* @param string b
	*
	* @return
	*/
	public function __construct(string $a, string $b)
	{
		$this->strA = $a;
		$this->strB = $b;
		$this->distanceMap = [];
	}

	/**
	* Calculate levenshtein distance between the two string parameters
	*
	* @param string a
	* @param string b
	*
	* @return int - levenshtein distance between the two string parameters
	*/
	public static function levenshtein_dis(string $a, string $b): int
	{
		$calc = new self($a, $b);
		return $calc->calculate_portion(0, 0);
	}

	/**
	* Recursive method to calculate levenshtein distance for a portion of the two strings.
	*
	* @param int offsetA
	* @param int offsetB
	*
	* @return int - levenshtein distance of the portion of the string after the offset
	*/
	private function calculate_portion(int $offsetA,  int $offsetB): int
	{
		//check if this portion has already been calculated
		$key = $offsetA.'-'.$offsetB;
		if (isset($this->distanceMap[$key]))
			return $this->distanceMap[$key];
		
		//get lengths of strings
		$lenA = strlen($this->strA);
		$lenB = strlen($this->strB);
		
		// check if we are the the end of either string 
		if ($lenA == $offsetA) {
			return $lenB - $offsetB;
		} elseif ($lenB == $offsetB) {
			return $lenA - $offsetA;
		}

		//compare characters at offset
		$charA = $this->strA[$offsetA];
		$charB = $this->strB[$offsetB];
		
		if ($charA == $charB) {
			$ans = $this->calculate_portion($offsetA+1, $offsetB+1);
		 } else {
			 $ans =  1 + min(
			   $this->calculate_portion($offsetA, $offsetB+1),
			   $this->calculate_portion($offsetA+1, $offsetB),
			   $this->calculate_portion($offsetA+1, $offsetB+1)
			 );
		 }

		$this->distanceMap[$key] = $ans;
		return $ans;
	}
}