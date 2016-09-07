<?php

// function created to format phone numbers
function formatPhoneNumber($number) {
// splits phone number string into array
	$arrayOfNumbers = str_split($number);
	$string = $arrayOfNumbers[0]
			. $arrayOfNumbers[1]
			. $arrayOfNumbers[2]
			. "-"
			. $arrayOfNumbers[3]
			. $arrayOfNumbers[4]
			. $arrayOfNumbers[5]
			. "-"
			. $arrayOfNumbers[6]
			. $arrayOfNumbers[7]
			. $arrayOfNumbers[8]
			. $arrayOfNumbers[9];


	return $string;
}


function parseContacts($filename)
{

// creates emtpy array that will later contain the final formatted answer...does that make sense? It will.
	$contacts = [];							

// opens file to read, sets parameters(read entire length of file(filesize)), and closes file.
	$handle = fopen($filename, 'r');
	$contentString = trim(fread($handle, filesize($filename)));
	fclose($handle);

// variable created that will convert string to array
	$arrayOfContents = explode("\n", $contentString);

// foreach loop created to iterate through converted array.
	foreach ($arrayOfContents as $personString) {
// converts sstring within previously converted array into an array. Now, the phone numbers and names are indexed
		$personArray = explode("|", $personString);
// creates array and assigns the name and phone number to keys
		$personArrayWithKeys = [];
		$personArrayWithKeys["name"] = $personArray[0];
		$personArrayWithKeys["phone"] = formatPhoneNumber($personArray[1]);

// assigns newly created array containing name and phone keys to previously created empty array.
		$contacts[] = $personArrayWithKeys;
 	}


    return $contacts;
}

var_dump(parseContacts('contacts.txt'));








