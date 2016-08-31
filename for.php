<?php 
	fwrite(STDOUT, "Please enter a starting number\n");
	$startingNumber = (int)fgets(STDIN);
	fwrite(STDOUT, "Please enter an ending number\n");
	$endingNumber = (int)fgets(STDIN);
	fwrite(STDOUT, "Increment by how much?");
	$incrementCount= (int)fgets(STDIN);

	for ($i = $startingNumber; $i <= $endingNumber; $i += $incrementCount) {
		echo $i . PHP_EOL;
		if ($incrementCount == "") {
			$incrementCount = 1;
		}
	}
 ?>