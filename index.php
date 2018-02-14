<?php

// Setup the app id
$validAppId = ''; // TODO: Put your app ID here

// Get raw POST data
$postData = file_get_contents( 'php://input' );

// Decode the JSON
$alexaRequest = json_decode($postData);

// Verify the application ID
if ($alexaRequest->session->application->applicationId === $validAppId) {

	// Setup a response
	$response = [
		"response" => [
			"outputSpeech" => [
				"type" => "PlainText",
				"text" => "Hello Alexa"
			]
		]
	];

	// Setup a JSON response header
	header('Content-Type: application/json');

	// Return the output
	echo json_encode($response);

}