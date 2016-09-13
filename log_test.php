<?php
// Create a log_test.php file in your exercises directory. At the top of log_test.php, be sure to require_once 'Log.php';. 
	require_once 'Log.php';

// Create an instance of the Log class
	$newFile = new Log();
// Set the $filename property in the class; use the format log-YYYY-MM-DD.log.
	$newFile->filename = date("Y-m-d");
// inserts error message
	$newFile->error("username or password is incorrect");
// inserts success message
	$newFile->info("user logged in successfully");
