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

// TODO: Verify the session.application.applicationId

// TODO: Look at the session.request.intent.name
//switch($intent) {
//	'RunTest':
//		runTestIntent();
//	default:
//		unknownIntent();
//}

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