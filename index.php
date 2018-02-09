<?php

// Get raw POST data
$postData = file_get_contents( 'php://input' );

// Decode the JSON
$alexaRequest = json_decode( $post );

// Throw it in a debug log file that anyone can view
//file_put_contents('./debug.log', $alexaRequest);

// Send some output
$result = array(
	"status" => "success"
);
echo json_encode($result);