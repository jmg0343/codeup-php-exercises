<?php

fwrite(STDOUT, "1 for addition, 2 for subtraction, 3 for multiplication, 4 for division, 5 for modulus\n");
$operation = trim(fgets(STDOUT));

fwrite(STDOUT, "Please enter first number\n");
$a = trim(fgets(STDOUT));
fwrite(STDOUT, "Please enter second number\n");
$b = trim(fgets(STDOUT));

function errorMessage() {
	echo "Error: Both inputs must be numbers";
}
function cannotDivideByZero() {
	echo "Cannot Divide By 0";
}

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	return $a + $b;		
	} else {
		return errorMessage();
	}
}

function subtract($a, $b) {
   if(is_numeric($a) && is_numeric($b)) {
   		return $a - $b;
   } else {
   		return errorMessage();
   }
}

function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	return $a * $b;		
	} else {
		return errorMessage();
	}
}

function divide($a, $b) {
	if ($b == 0) {
		return cannotDivideByZero();
	} elseif (is_numeric($a) && is_numeric($b)) {
    	return $a / $b;		
	} else {
		return errorMessage();
	}
}

function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	return $a % $b;		
	} else {
		return errorMessage();
	}
}
	
switch ($operation) {
	case '1':
		echo add($a, $b) . PHP_EOL;
		break;
	case '2':
		echo subtract($a, $b) . PHP_EOL;
		break;
	case '3':
		echo multiply($a, $b) . PHP_EOL;
		break;
	case '4':
		echo divide($a, $b) . PHP_EOL;
		break;
	case '5':
		echo modulus($a, $b) . PHP_EOL;
		break;
	default:
		echo "Please enter something useful";
		break;
}

