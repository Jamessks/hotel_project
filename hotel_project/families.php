<?php
error_reporting(0);

function parseString($string){
	$vowels = ['a','e','i','o','u']; //take out y
	$consonants = ['c', 'd', 'f', 'g', 'h', 'j', 'k', 'l',
	'm', 'n', 'p', 'q', 'r', 's', 'v', 'x','w','z']; //take out b and t
	// $allconsonants = ['c', 'd', 'f', 'g', 'h', 'j', 'k', 'l',
	// 'm', 'n', 'p', 'q', 'r', 's', 'v', 'x','w','z','b','t','y'];
	$temp3 = [];
	$temp = strtolower($string);
	$temp = explode(' ',$string);
	for ($i=0; $i < sizeof($temp); $i++) {
		$temp2 = str_split($temp[$i]);
		for($k = 0; $k < sizeof($temp2); $k++){
			if($temp2[$k] == "y"){
				$temp3[$i] .= 'om';
			} else if($temp2[$k] == "z"){
				$temp3[$i] .= "och";
			} else if($temp2[$k] == "o"){
				if($k > 0){
					$num = $k - 1;
					$tempPreviousChar = $temp2[$num];
					if($tempPreviousChar == 'b' || $tempPreviousChar == 't'){
						$temp3[$i] .= "od";
					} else if(in_array($tempPreviousChar,$consonants)){
						$temp3[$i] .= "oden";
					} else if(in_array($tempPreviousChar,$vowels)){
						$temp3[$i] .= "n";
					}
				} else {
					if($k == 0){
						$temp3[$i] .= "poe";
					}
				}
			} else {
				$temp3[$i] .= $temp2[$k];
			}
		}
	}
	return $temp3;
}
$string = 'eo oz eo';
print_r(parseString($string));
