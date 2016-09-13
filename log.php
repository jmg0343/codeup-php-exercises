<?php
	class Log
	{
// A property called $filename where you store the name of the file for the log.
		public $filename;
// A method called logMessage() that will take in a log level and message as before. 
		function logMessage($level, $message) {
// It will open the file stored in $filename for appending, output the message in the same format as before, and then close the handle.
			$handle = fopen($this->filename, 'a');
			fwrite($handle,PHP_EOL . $message);
			fclose($handle);

		}
		// Methods info() and error() that will take in a message and forward it on to logMessage() along with the relevant log level.
		function error($message) {
			$this->logMessage(" ERROR", $message);
		}

		function info($message) {
			$this->logMessage(" INFO", $message);
		}
	}



