<?php

// Turn on all error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Get raw POST data
$postData = file_get_contents( 'php://input' );

// Decode the JSON
$alexaRequest = json_decode($postData);

// TODO: Verify the session.application.applicationId

// TODO: Look at the session.request.intent.name

// Setup a response
$response = [
	"response" => [
		"outputSpeech" => [
			"type" => "SSML",
			"ssml" => "<speak>Hello. This is the D3 test skill.</speak>"
		]
	]
];

// Setup a JSON response header
header('Content-Type: application/json');

// Return the output
echo json_encode($response);