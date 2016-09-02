<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam', 'Joey'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael', 'Joey'];



// Create a function that returns TRUE or FALSE if an array value is found. Search for Tina and Bob in $names. Make sure it works as expected.
function searchInArray($search, $array) {
	$result = array_search($search, $array);
	if ($result !== false) {
		echo "We found $search\n";
	} else {
		echo "$search found.";
	}
}

searchInArray('Bob', $names);

echo PHP_EOL . PHP_EOL;

// Create a function to compare 2 arrays that returns the number of values in common between the arrays. Use the 2 example arrays and make sure your solution uses array_search().

// function compareArrays($array1, $array2) {
// 	foreach ($array1 as $names1) {
// 		// print_r($names1 . PHP_EOL);
// 		foreach ($array2 as $names2) {
// 		// print_r($names2 . PHP_EOL);
// 			if ($names1 === $names2) {
// 			print_r($names2 . PHP_EOL);
// 			}
// 		}
// 	}
// }
// compareArrays($names, $compare);

function compareArrays($array1, $array2) {
	foreach ($array1 as $names1) {
		$result = array_search($names1, $array2);
		if ($result !== false) {
			print_r($names1 . PHP_EOL);
		}
	}
}

compareArrays($names, $compare);