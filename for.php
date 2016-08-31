<?php 
	fwrite(STDOUT, "Please enter a starting number\n");
	$startingNumber = trim(fgets(STDIN));
	


	if (is_numeric($startingNumber)) {
		fwrite(STDOUT, "Please enter an ending number\n");
		$endingNumber = trim(fgets(STDIN));
			if (is_numeric($endingNumber)) {
				fwrite(STDOUT, "Increment by how much?");
				$incrementCount= trim(fgets(STDIN));
			} else {
				echo "Not a valid number";
			}
	} else {
		echo "Not a valid number";
	}

	for ($i = $startingNumber; $i <= $endingNumber; $i += $incrementCount) {
		echo $i . PHP_EOL;
		if ($incrementCount == "") {
			$incrementCount = 1;
		}
	}
 ?>