<?

// ctwitter_max3.php
// 
// this code replaces twitterStreamMaxGeo.php for the Twitter v1.1 API requiring Oauth
//
// You will need to create a Twitter App from your account and replace the fields below with 
// your: consumer key, consumer secret, access token, and access secret - strings
//
// A simple class to access the Twitter streaming API, with OAuth authentication
//
//	Mike (mike@mikepultz.com)
//
// Simple Example:
//
	require 'ctwitter_stream_max3.php';
//
	$t = new ctwitter_stream();
//
	$t->login('gRJLSDn77LlqEw3xauLTipWde', 'yq4QeKiAuwHqJtjCZ7bYWFGYxd8x3kzHvyKYjMPQoLGXCwR9K3', '1656639696-d62wfIKOtYstSWF35cG4E5GN7cewWCltJsTKM4c', 'qKTnzcMxeRPCUyqQbkmbsS30lMyXnQ5dZ27e62ezMKy60');
	
//	$t->login('consumer_key', 'consumer secret', 'access token', 'access secret');
//
	$t->start(array('I feel', 'I am feeling') );  // search for 'facebook' 
//	$t->start(array(), array('-180','-90','180','90') );	// search entire world for geo-coded tweets


?>