<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Get raw POST data
$postData = file_get_contents( 'php://input' );

// Decode the JSON
$alexaRequest = json_decode($postData);

// Throw it in a debug log file that anyone can view
file_put_contents('debug.log', $postData);

// Send some output
$result = array(
	"status" => "success"
);
echo json_encode($result);