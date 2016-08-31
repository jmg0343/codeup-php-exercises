<?php 
	$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

	// Construct a loop that iterates through each value and outputs its type as either integer, float, boolean, array, null, or string.

	foreach($things as $items) {
		if(is_array($items)) {
			foreach($items as $type) {
				echo "type is " . gettype($type) . " and value is " . $type . PHP_EOL;
			}
		} else {
			echo "type is " . gettype($items) . " and value is " . $items;
		}
		echo PHP_EOL;
	}

	echo PHP_EOL . PHP_EOL;

	// Construct a loop that iterates through each value and outputs only values with a type that is scalar.

	foreach($things as $scalarType) {
		if(is_array($scalarType)) {
			foreach($scalarType as $arrayScalar) {
				if(is_scalar($arrayScalar)) {
					echo "type is " . gettype($arrayScalar) . " and value is " . $arrayScalar . PHP_EOL;
				}
			}
		} elseif(is_scalar($scalarType)) {
			echo "type is " . gettype($scalarType) . " and value is " . $scalarType . PHP_EOL;
		}

	}

	echo PHP_EOL . PHP_EOL;

	// Create a loop that will echo out every value, including those nested in arrays.

	foreach($things as $thingsValue) {
		if(is_array($thingsValue)) {
			foreach($thingsValue as $arrayValue) {
				echo $arrayValue;
			}
		echo PHP_EOL;
		} else {
			echo $thingsValue . PHP_EOL;
		}
	}

 ?>