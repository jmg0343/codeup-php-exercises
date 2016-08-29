<?php 
	$multiples = 2;
	do {
		echo "$multiples" . PHP_EOL;
		$multiples *= $multiples;
	} while ($multiples < 1000000);
