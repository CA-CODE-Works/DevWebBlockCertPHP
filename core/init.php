<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'php-client/cmd/bootstrap.php';
use BlockCypher\Auth\SimpleTokenCredential;
use BlockCypher\Rest\ApiContext;

// ... other classes
use BlockCypher\Api\Address;
use BlockCypher\Client\AddressClient;

/*
 This is your BlockCypher token, 
 Sign Up at  https://accounts.blockcypher.com/
 Verify Token at https://api.blockcypher.com/v1/tokens/<token>
 */
$token = getenv('blockcyphertoken');

// File path to csv 
$dir = getenv('rosterdir') . 'roster.csv';

if(isset($_POST) && ! empty($_POST) ){
	
	
	$credentials = new SimpleTokenCredential($token);
	
	$config = array(
		'log.LogEnabled' => true,
		'log.FileName' => 'BlockCypher.log',
		'log.LogLevel' => 'DEBUG', // PLEASE USE `FINE` LEVEL FOR LOGGING IN LIVE ENVIRONMENTS
		'validation.level' => 'log',
		// 'http.CURLOPT_CONNECTTIMEOUT' => 30
	);
	
	$apiContext = ApiContext::create(
		'main', 'btc', 'v1',
		$credentials,
		$config
	);
	
	$addressClient = new AddressClient($apiContext);
	$addressPublicKey = $addressClient->generateAddress($apiContext)->getPublic();
	
	$fname = $_POST['first'];
	$lname = $_POST['last'];
	$email = $_POST['email'];
	
	
	file_put_contents($dir, "$fname $lname,ecdsa-koblitz-pubkey:$addressPublicKey,$email" . PHP_EOL, FILE_APPEND );
	
}

?>
