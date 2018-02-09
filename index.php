<?php

/***************
 * Alexa Skill *
 ***************/


// Get raw POST data
$postData = file_get_contents( 'php://input' );

// Decode the JSON
$alexaRequest = json_decode( $post );

file_put_contents('./debug.log', $alexaRequest);