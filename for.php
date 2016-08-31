<?php 
	fwrite(STDOUT, "Please enter a starting number\n");
	$startingNumber = (int)fgets(STDIN);
	fwrite(STDOUT, "Please enter an ending number\n");
	$endingNumber = (int)fgets(STDIN);

	for ($i = $startingNumber; $i <= $endingNumber; $i++) {
		echo $i . PHP_EOL;
	}
 ?>