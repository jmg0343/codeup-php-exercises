<?php

// At the top of the file, create a new function called inspect() that takes in one argument. 
// Your inspect() function should look at the passed argument and return a string with the variable's type and its value, similar to "The integer is 12.".


// TODO: Create your inspect() function here
function inspect($argument) {
	$typeOfArgument = gettype($argument);

	switch ($typeOfArgument) {
		case is_string($argument):
			if (empty($argument)) {
				echo "The $typeOfArgument is empty\n";
			} else {
				echo "The $typeOfArgument is $argument\n";
			}	
			break;
		case is_array($argument):
			echo "The $typeOfArgument is ";
			foreach ($argument as $key) {
				if (empty($key)) {
					echo "$typeOfArgument is empty\n";
				} else {
					echo $key;	
				}
			}
			break;
		default: 
			echo "The $typeOfArgument is $argument\n";
			break;
	}
}

// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1:' . PHP_EOL;
echo inspect($num1);

echo 'Inspecting $num2:' . PHP_EOL;
echo inspect($num2);

echo 'Inspecting $num3:' . PHP_EOL;
echo inspect($num3);

echo 'Inspecting $num4:' . PHP_EOL;
echo inspect($num4);

echo 'Inspecting $null:' . PHP_EOL;
echo inspect($null);

echo 'Inspecting $bool1' . PHP_EOL;
echo inspect($bool1);

echo 'Inspecting $bool2' . PHP_EOL;
echo inspect($bool2);

echo 'Inspecting $string1' . PHP_EOL;
echo inspect($string1);

echo 'Inspecting $string2' . PHP_EOL;
echo inspect($string2);

echo 'Inspecting $array1' . PHP_EOL;
echo inspect($array1) . PHP_EOL;

echo 'Inspecting $array2' . PHP_EOL;
echo inspect($array2) . PHP_EOL;
