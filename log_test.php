<?php 	

require_once 'Log.php';

$logger = new Log();
$logger->logMessage('Warning', 'LogMessage test...');

$logger->handle = 4;