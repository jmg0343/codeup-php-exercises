<?php

// Open logger.php in Sublime and complete the logMessage function so that it has the following features:

// Log to a file named log-YYYY-MM-DD.log where the Y, M, and D values are the 4-digit year, 2-digit month, and 2-digit day that the log is taking place.
// If the log file for a given day does not yet exist, it should be created. If it already exists, it should be appended to.
// Newer logs should appear at the end of the log file.
// Log entries should match the format:

//   YYYY-MM-DD HH:MM:SS [LEVEL] MESSAGE
// The line starts with a date and time. Next is the $logLevel, followed by the $message. Each log entry should be on its own line.







// function created that will create or append to a file
function logMessage($level, $message) {	
// time and date functions assigned to variables
	$time = date("H:i:s");
	$date = date("Y-m-d");
// filename created with current date. A new file will be created every day
	$filename = "log-" . $date . ".log";

// handle opens the file and appends new information to the end
	$handle = fopen($filename, 'a');

// writes the date, time, and message to the file, then closes it
	fwrite($handle,PHP_EOL . $date . $time  . $level . $message);
	fclose($handle);

}

// function that will display error
function logError($message) {
	logMessage(" ERROR", $message);
}

// function that will indicate successful login
function logInfo($message) {
	logMessage(" INFO", $message);
}

// calls both functions and displays both error and info messages
logError(" username or password is incorrect");
logInfo(" User logged in successfully");


