<?php 


	$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

function humanizedList($string, $sort = false) {
//	converts string into array
	$array = explode(",", $string);

	if ($sort)  {
		asort($array);
	}

//	takes "Tony Stark" out of array
	$lastValue = array_pop($array);

//	adds "and Tony Stark" to array
	array_push($array, " and " . $lastValue);


//	converts updated array back into string
	$string = implode(",", $array);

//	prints out new string
	return $string . PHP_EOL;
}

// echo humanizedList($physicistsString, true);
$famousFakePhysicists = humanizedList($physicistsString, true);

echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}" . PHP_EOL;

 ?>