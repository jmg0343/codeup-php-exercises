<?php 
// ********************************** EXAMPLE 1 ******************************************
	// $states = [
	// 	"CA" => "California",
	// 	"NY" => "New York",
	// 	"TX" => "Texas",
	// 	"HI" => "Hawaii",
	// ];

	// foreach ($states as $key => $value) {
	// 	echo "The great state of $value has an abbreviation of $key" . PHP_EOL;

	// 	echo "\$value is the same thing as {$states[$key]}" . PHP_EOL . PHP_EOL;
	// }
// ********************************** EXAMPLE 2 ******************************************
	// $students = [
	// 	[ "name" => "Virginia Potts", "age" => 29],
	// 	[ "name" => "Elon Musk", "age" => 42],
	// 	[ "name" => "Rasmus Lerdorf", "age" => 45],
	// 	[ "name" => "Marissa Mayer", "age" => 38]
	// ];

	// foreach($students as $student) {
	// 	foreach($student as $key => $value) {
	// 		echo "The student's $key is $value" . PHP_EOL;
	// 	} 
	// }
// ********************************** Exercise ******************************************
	
	$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);


// Construct a loop that iterates through each book and then each book's keys and values. Have it output the book's title, 
// then list the key value pairs for the data about each book.

	foreach ($books as $title => $value) {
		echo "Title: " . $title . PHP_EOL;
		foreach ($value as $info => $infoValue) {
			echo "$info: " . $infoValue . PHP_EOL;
		}
	}

	




