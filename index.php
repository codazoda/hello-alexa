<?php

// Turn on all error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Setup some variables
$validAppId = 'amzn1.ask.skill.018d063b-19dc-4a21-976b-1f5b635140e2';

// Get raw POST data
$postData = file_get_contents( 'php://input' );

// Decode the JSON
$alexaRequest = json_decode($postData);

// Verify the application ID
if ($alexaRequest['session']['application']['applicationId'] === $validAppId) {

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

}