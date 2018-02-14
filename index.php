<?php

// TODO: Enter your app ID here (see README.md)
$validAppId = '';

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
				"text" => "Hi, I'm Alexa."
			]
		]
	];

	// Setup a JSON response header
	header('Content-Type: application/json');

	// Return the output
	echo json_encode($response);

}