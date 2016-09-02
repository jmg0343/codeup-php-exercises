<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam', 'Joey'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael', 'Joey', 'Kate'];


// Write a function called combine_arrays() that will take in two array values as parameters and return a new array with values from both.

// If the arrays have the same value at the same index, then it should only be added once.
// If the values differ, then the value from the first array should be added and then the second.
// The function will need to use at least two of the array functions we discussed: array_shift(), array_unshift(), array_push(), and array_pop().




function combineArrays($array, $array2) {
	$resArray = [];

	if(count($array) >= count($array2)) {
		$largerArray  = $array;
		$shortArray = $array2;
	} else {
		$largerArray = $array2;
		$shortArray = $array;
	} 

	foreach ($largerArray as $key => $value) {
		if(in_array($value, $shortArray)) {
			array_push($resArray, $value);
		} else {
			array_push($resArray, $value);
			if (isset($shortArray[$key])) {
				array_push($resArray, $shortArray[$key]);
			}
		}
	}
	return $resArray;
}
print_r(combineArrays($names, $compare));