<?php 
	for ($i = 1; $i <= 100; $i++) {
		if ($i % 2 == 1) {
			continue;
		} else {
			echo $i . PHP_EOL;
		}
	} 

	echo PHP_EOL;

	for ($i = 1; $i <= 100; $i++) {
		if ($i == 11) {
			break;
		} else {
			echo $i . PHP_EOL;
		}
	}

 ?>